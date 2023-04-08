<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'status'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function scopeSearchFilter($query)
    {
        if(request()->key){
            $query = $query->where('name','like','%'.request()->key.'%');
        }
        if(request()->order)
        {
            $order = explode('-',request()->order);
            $orderBy = isset($order[0]) ? $order[0] : 'id';
            $orderValue = isset($order[1]) ? $order[1] : 'DESC';
            $query  = $query -> orderBy($orderBy,$orderValue);
        }
        if(request()->status != ''){
            $query = $query->where('status',request()->status);
            if(request()->status == 2){
                $query = $query->where('status',0);
            }

        }
        return $query;
    }

    public function getById($id)
    {
        return $this->find($id);
    }

    public function getDataIndex($i = 10)
    {
        return $this->searchFilter()->paginate($i);
    }

    public function getAll()
    {
        return $this->where('status',2)->get();
    }

    public function add(Request $data)
    {
        if ( $data->id == '') {
            $password = Hash::make($data->password);
            $data->request->remove('password');
            $data->merge(['password'=>$password]);
            $this->create($data->all());
            $object = (object)$data->all();
            session(['account' => $object]);
        } else {
            if ($this->checkPass($data)) {
                $data->request->remove('old_password');
                $data->request->remove('password');
                $data->merge(['password'=>Hash::make($data->confim_password)]);
                $data->request->remove('confim_password');
                $this->find($data->id)->update($data->all());
                return true;
            } else {
                return false;
            }
        }
    }

    public function checkPass($data)
    {
        if( Auth::attempt(['email' => $data->email, 'password' =>$data->old_password]) && ($data->password == $data->confim_password)) {
            return true;
        } else {
            return false;
        }
    }

    public function remove($id)
    {
        return  $this->find($id)->delete();
    }
}
