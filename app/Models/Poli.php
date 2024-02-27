<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poli extends Model
{
    use HasFactory;
    protected $table = 'tbl_poli';
    protected $fillable = ['poli'];


    function scopeGigi($query){
        return $query->where('poli', 'gigi');
    }

    function scopeUmum($query){
        return $query->where('poli', 'umum');
    }
}