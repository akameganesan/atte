<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\attendances;

class attendances extends Model
{
    use HasFactory;
    protected $fillable = [
         'users_id',
         'day',
         'start_time',
         'end_
         time'
        ];

           public function users()
    {
        return $this->belongsTo(users::class);
    }

       public function attendances()
    {
        return $this->hasMany(rests::class);
    }
}
