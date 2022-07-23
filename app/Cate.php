<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cate extends Model
{
    protected $table = 'cates';
    protected $fillable = ['id', 'name', 'created_at',	'created_by', 'modified_at', 'modified_by', 'status', 'special', 'ordering'];

    public function product(){
        return $this->hasMany('App\Product');
    }
}
