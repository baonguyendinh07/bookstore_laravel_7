<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //	short_description	description	price	sale_off	picture	cate_id
    protected $table = 'books';
    protected $fillable = ['id', 'name', 'short_description', 'description', 'price', 'sale_off', 'picture', 'created_at',	'created_by', 'modified_at', 'modified_by', 'status', 'special', 'ordering', 'cate_id'];

    public function cate(){
        return $this->belongTo('App\Cate');
    }
}
