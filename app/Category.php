<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

	//protected $table = 'categories'; - не надо писать, модель знает с чем работает по умолчанию

    protected $fillable = ['slug','title'];

    public function posts()
    {
    	return $this->hasMany('App\Post');
    }
}
