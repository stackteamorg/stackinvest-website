<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $table = 'messages';
    protected $guarded = [];

    protected function mobile(): Attribute
    {
        return Attribute::make(
            set:function ($value) {
                $mobilePrefix = substr($value, 0, strpos($value, '98'));
                return in_array($mobilePrefix, ['00', '+', '']) ? str_replace($mobilePrefix . '98', '0', $value) : $value;
            }

        );
    }
}
