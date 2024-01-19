<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\rests;
use App\Models\attendances;
use App\Models\User;
use Carbon\Carbon;
use DateTime;
use DateInterval;
use DatePeriod;
use Illuminate\Support\Facades\DB;

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
        return $this->belongsTo(Attendance::class);
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

     public function totalRests()
    {
        $all = rests::all;
        //$start_time1 = $this->start_time->get();
        //$start_time1 = $this->start_time;
         $s = $all->where('attendances_id', '=', '111');
        //$end_time1 = $this->end_time->get();
        //$end_time1 = $this->end_time;
        //$sideMenuCalorie = $this->getRelation('sideMenu')->calorie;
        
        $first = new Carbon($s->start_time);
        $second = new Carbon($s->end_time);

        return $first->diffInMinutes($second);
    }

    public function one()
    {
        
        $all = 111111111;
   

        return $all;
    }




}
