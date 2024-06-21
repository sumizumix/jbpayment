<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Course extends Authenticatable
{
    use HasFactory;
    protected $table="course";
    protected $fillable = [
        'name',
        'description',
      
        'seotitle',
        'seodescription'
    ];
}
