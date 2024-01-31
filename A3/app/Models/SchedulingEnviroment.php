<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchedulingEnviroment extends Model
{
    use HasFactory;
    protected $table = 'sheduling_enviroment';
    protected $fillable = [ 'course_id',
    'document_instructor',
    'date_scheduling',
    'initial_hour',
    'final_hour',
    'enviroment_id'];

    public function sheduling_enviroment()
    {
        return $this->belongsTo(SchedulingEnviroment::class,'id_enviroment');
    }

    public function instructor()
    {
        return $this->belongsTo(Instructor::class,'document');
    }
}
