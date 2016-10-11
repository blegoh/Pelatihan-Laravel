<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'Products';
    protected $primaryKey = 'ProductID';

    public function category()
    {
        return $this->belongsTo(Category::class,'CategoryID');
    }

    public $timestamps = false;
}
