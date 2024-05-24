<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Passivo extends Model
{
    
    //use HasFactory;

    //use SoftDeletes;

    protected $table = 'passivo';
    protected $fillable = [
        'caixa', 
        'pasta',
        'nome',
    ];

    public $timestamps = false;
}

