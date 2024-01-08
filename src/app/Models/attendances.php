<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Attendance;

class attendances extends Model
{
    use HasFactory;
    protected $fillable = [
         'users_id',
         'day',
         'start_time',
         'end_time'
        ];

           public function users()
    {
        return $this->belongsTo(User::class);
    }

       public function attendances()
    {
        return $this->hasMany(Rest::class);
        //return $this->belongsTo(rests::class);
    }

    public function getUserNameById()
  {
    return attendances::join('users', 'attendances.users_id', 'users.id')->get();
            //->join('users', 'posts.user_id', '=', 'users.id')
            //->get();
            //->join('users', 'attendances.users_id', 'users.id')->get();
  }
}
