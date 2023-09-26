<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    // use HasFactory;
    // protected $table = 'openemr_postcalendar_events';
    // public $timestamps=false;
    protected $table ="users";
    protected $fillable=['id','facility','username','facility_id'];
}
