<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class College extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $table = 'college';

    protected $fillable = [
        'college_abbr', 
        'college_name',
        'campus' 
    ];
}
