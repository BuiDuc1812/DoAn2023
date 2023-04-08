<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Order extends Model
{
    use HasFactory;
    protected  $fillable =  [
        'name', 'address','phone', 'note','status' ,'user_id'
    ];
    public function user()
    {
        return $this ->belongsTo(User::class);
    }
    public function scopeSearch($query)
     {
        $key = request()->key;
        if ($key != null) {
            $users = User::where('name','like','%'.$key.'%')->get();
            $user_id = [];
            foreach ($users as  $value) {
                array_push($user_id, $value->id);
            }
            $query = $query ->whereIn('user_id', $user_id);
        }
        return $query;
     }
    
}
