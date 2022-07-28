<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $fillable = ['id', 'name', 'description', 'picture', 'link', 'status', 'ordering', 'created_at',  'created_by', 'updated_at', 'updated_by', 'status'];
}
