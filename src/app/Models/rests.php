<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\rests;

class rests extends Model
{
    use HasFactory;
    protected $fillable = [
         'attendances_id',
         'start_time',
         'end_time',
        ];
    public function attendances()
    {
        return $this->belongsTo(attendances::class);
    }


}
