<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class song extends Model
{
    use HasFactory;

    // protected $table = 'songs';
    // protected $primaryKey = 'id';
    // public $keyType = int;
    // public $timestamps = true;
    protected $fillable = ['title', 'singer'];
}
