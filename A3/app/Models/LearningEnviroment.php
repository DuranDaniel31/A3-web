<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LearningEnviroment extends Model
{
    use HasFactory;
    protected $table = 'learning_enviroment';
    protected $fillable = ['name',
    'capacity',
    'area_mt2',
    'floor',
    'inventory',
    'type_id',
    'location_id',
    'status'];
}
