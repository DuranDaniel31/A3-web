<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Stmt\Return_;

class Career extends Model
{
    use HasFactory;
    protected $table = 'career';
    protected $fillable = ['name',
    'type'];

    public function couurses()
    {
        return $this->hasMany(Course::class);
    }

}
