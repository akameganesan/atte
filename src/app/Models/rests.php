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
        //return $this->hasMany(attendnces::class);
    }

    protected $guarded = array('id');
    public static $rules = array(
        'attendances_id' => 'required',
        //'title' => 'required',
    );

    public function getTitle(){
        return 'ID'.$this->id . ':' . $this->title;
    }


}
