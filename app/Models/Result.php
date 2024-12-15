<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;
    protected $fillable = ['category', 'overall_grade'];

    // A result has many subjects
    public function subjects()
    {
        return $this->hasMany(Subject::class);
    }


}
