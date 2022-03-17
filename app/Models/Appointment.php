<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
    protected $table="appointments";
    protected $fillable =[
        'appointment_time',
        'appointment_date',
        'nameandlastname',
        'appointment_email',
        'appointment_tel',
        'appointment_content',
    ];
}
