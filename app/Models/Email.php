<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'emails';
    const EMAIL_SENT = 'sent';
    const EMAIL_PENDING = 'pending';
    const EMAIL_FAILED = 'failed';
    const EMAIL_STATUS = [
        self::EMAIL_SENT,
        self::EMAIL_PENDING,
        self::EMAIL_FAILED,
    ];

}
