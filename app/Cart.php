<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = 'carts';
    protected $fillable = ['id', 'username', 'books', 'prices', 'quantities', 'names', 'pictures', 'status', 'date'];
    public $timestamps = false;
}
