<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\users;

class users extends Model
{
    use HasFactory;
    protected $fillable = [
         'name',
         'email',
         'password'
        ];

    public function users()
    {
        return $this->hasMany(attendances::class);
    }

 
}
