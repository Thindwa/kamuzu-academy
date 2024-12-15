<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    protected $fillable = ['result_id', 'subject_name', 'grade'];

    // Each subject belongs to one result
    public function result()
    {
        return $this->belongsTo(Result::class);
    }
}
