<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo as BelongsTo;

class Feedback extends Model
{
    use HasFactory;

    protected $table = 'feedbacks';

    protected $fillable = [
        'user_id',
        'book_id',
        'name',
        'surname',
        'value',
        'specialist_id',
        'body_text'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function specialist(): BelongsTo
    {
        return $this->belongsTo(Specialist::class);
    }

    public function book(): BelongsTo
    {
        return $this->belongsTo(Book::class);
    }

    public function getNameAndSurname(): string
    {
        return isset($this->user_id) ? $this->user->getNameAndSurname() : $this->book->name . ' ' . $this->book->surname;
    }

    public function getFullName(): string
    {
        return isset($this->user_id) ? $this->user->getFullName() : $this->surname . ' ' . $this->name . ' ' . $this->second_name;
    }
}
