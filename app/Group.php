<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $table = 'groups';
    protected $fillable = ['id', 'name', 'status', 'group_acp'];

    public function product()
    {
        return $this->hasMany('App\User');
    }
}
