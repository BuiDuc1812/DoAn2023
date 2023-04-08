<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'price', 'description', 'image', 'category_id'
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
     public function scopeSearch($query)
     {
        if ($key = request()->key) {
            $query =$query ->where('name','like','%'.$key.'%');
        }
        return $query;
     }
     public function order() {
        return $this->hasMany(Orders::class);
    }

}
