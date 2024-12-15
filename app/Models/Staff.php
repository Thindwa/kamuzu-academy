<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    // Specify the fillable attributes for mass assignment
    protected $fillable = [
        'category',
        'name',
        'credentials',
        'position',
        'subjects',
    ];
    
    // In App\Models\Staff.php
public function getAcademicStaff()
{
    // Adjust the logic to retrieve related academic staff data as necessary
    return $this->where('category', 'AcademicStaff')->get();
}

}
