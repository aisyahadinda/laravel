<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
    protected $table = 'latihan_biodata';
    public $timestamps = false;
    protected $hidden = [];
    protected $fillable = [
        'age',
        'name',
        'fullname',
        'children',
        'gender',
        'religion',
        'birth_date',    
    ];
}
