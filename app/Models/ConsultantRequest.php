<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ConsultantRequest extends Model
{
    use HasFactory;

    protected $table = 'consultant_requests';
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
