<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class OrderDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'order_id', 'product_id','price','quantity','subtotal'
    ];
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    public function scopeSearch($query)
    {
       if ($key = request()->key) {
           $users = User::where('name','like','%'.$key.'%')->get();
           foreach ($users as  $value) {
               $query = $query ->where('user_id','=',$value->id);
           }
       }
       return $query;
    }
}
