<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Jenssegers\Date\Date as JDate;

class Specialist extends Model
{
    use HasFactory;

    public function doctor(): BelongsTo
    {
        return $this->belongsTo(Doctor::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function books(): HasMany
    {
        return $this->hasMany(Book::class);
    }

    public function schedules(): HasMany
    {
        return $this->hasMany(Schedule::class);
    }

    public function days(): HasMany
    {
        return $this->hasMany(Day::class,'specialist_id');
    }

    public function feedbacks(): HasMany
    {
        return $this->hasMany(Feedback::class);
    }

    public function averageScore(): float
    {
        $this->load('feedbacks');
        $sum = 0;
        if ($this->feedbacks->count() == 0) {
            return 0;
        }
        foreach ($this->feedbacks as $score) {
            $sum += $score->value;
        }
        return $sum/$this->feedbacks->count();
    }

    public static function doctorsSliderPrepare(): Collection
    {
        $doctors = Specialist::with(['user', 'category','feedbacks'])->get();
        foreach ($doctors as $doctor) {
            /** @var Specialist $doctor */
            $doctor->rating = $doctor->averageScore();
            $doctor->scoresCount = $doctor->feedbacks()->count();
        }
        return $doctors;
    }

    public function getNameAndSurname(): string
    {
        return $this->user->getNameAndSurname();
    }

    public function getFullName(): string
    {
        return $this->user->getFullName();
    }

    public function goodScoresPercent(): int
    {
        $allCount = $this->feedbacks()->count();
        if ($allCount == 0) {
            return 0;
        }
        $goodCount = $this->feedbacks()->where('value','>',3)->count();
        return round($goodCount/$allCount*100);
    }

    public function isDateFree(JDate $datetime): bool
    {
        /** @var Day $day */
        $day = $this
            ->days()
            ->where('day',$datetime->format('Y-m-d'))
            ->first();
        if (isset($day)) {
            $times = $day->setSchedule();
            foreach ($times as $time) {
                if ($time['is_free'])
                    return true;
            }
        }
        return false;
    }

    public function getLastScheduleDate(): JDate
    {
        $date = new JDate($this->schedules->last()->day);
        return $date->clone()->modify('+1 day');
    }
}
