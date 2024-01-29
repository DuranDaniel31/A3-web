<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $table = 'course';
    protected $fillable = ['shift', 'career_id', 'initial_date', 'final_date', 'status'];

    public function career()
    {
        return $this->belongsTo(Career::class,'id_career');
    }

    public function shedulinng_enviroment()
    {
        return $this->belongsTo(SchedulingEnviroment::class, 'id_course');

    }

    
}
