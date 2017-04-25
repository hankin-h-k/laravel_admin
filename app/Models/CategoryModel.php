<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryModel extends Model
{
    public $table='categories';
    public $fillable=['title', 'parent_id'];

    public function childs(){
    	return $this->hasMany('App\Models', 'parent_id', 'id');
    }
}
