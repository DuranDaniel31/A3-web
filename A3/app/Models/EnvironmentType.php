<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EnvironmentType extends Model
{
    use HasFactory;
    protected $table = 'environment_type';
    protected $fillable = ['description'];
    
    public function enviroment_type()
    {
        return $this->belongsTo(EnvironmentType::class ,'id_type');
        
    }

    public function location()
    {
        return $this->belongsTo(Location::class ,'id_location');
    }
    
    public function learnig_enviroment()
    {
        return $this->hasMany(LearningEnviroment::class ,'id_location');
    }

}
