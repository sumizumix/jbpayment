<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class paymodel extends Model
{
    use HasFactory;
    protected $table="pay";
    protected $fillable = [
        'name',
        'seotitle',
        'seodescription'
    ];
}

