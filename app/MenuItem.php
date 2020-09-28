<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    // Array list of editable properties
    protected $fillable = ["menu_type_id", "name", "description", "price", "thumbnail_path", "enabled"];

}
