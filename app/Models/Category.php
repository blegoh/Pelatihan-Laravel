<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'Categories';
    protected $primaryKey = 'CategoryID';

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public $timestamps = false;
}
