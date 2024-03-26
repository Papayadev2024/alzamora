<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class General extends Model
{
    use HasFactory;

    protected $fillable = ['address', 'cellphone','office_phone', 'email', 'facebook', 'instagram','youtube', 'twitter', 'whatsapp',  'form_email', 'business_hours'];

}