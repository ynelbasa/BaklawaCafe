<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    // Array list of editable properties
    protected $fillable = ["first_name", "last_name", "email_address", "phone_number", "table_size", "date_time", "notes", "status"];
    
}
