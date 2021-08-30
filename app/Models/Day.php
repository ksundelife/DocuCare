<?php

namespace App\Models;

use Carbon\CarbonInterval;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Jenssegers\Date\Date as JDate;

class Day extends Model
{
    use HasFactory;

    protected $table = 'schedules';
    protected $fillable = ['day','start_time','end_time','duration'];
    public array $times;

    public function specialist(): BelongsTo
    {
        return $this->belongsTo(Specialist::class,'specialist_id');
    }

    public function books(): HasMany
    {
        return $this->hasMany(Book::class,'schedule_id');
    }

    public function setSchedule(): array
    {
        $startTime = new JDate($this->start_time);
        $endTime = new JDate($this->end_time);
        $duration = CarbonInterval::createFromFormat('H:i:s', $this->duration);
        for ($time = $startTime, $i = 0; $time<$endTime; $time->add($duration), $i++) {
            $datetime = new JDate($this->day);
            $datetime->setTime($time->hour,$time->minute);
            $this->times[$i]['time'] = $time->format('H:i');
            $this->times[$i]['action'] = $datetime;
            $is_free = $this->books()
                ->whereDatetime($datetime)
                ->doesntExist();
            $this->times[$i]['is_free'] = $is_free;
        }
        return $this->times;
    }
}
