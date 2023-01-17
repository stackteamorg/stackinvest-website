<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhoneConsultation extends Model
{
    use HasFactory;
    protected $table = 'phone_consultations';
    protected $guarded = [];
}
