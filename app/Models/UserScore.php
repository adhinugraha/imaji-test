<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserScore extends Model
{
    use HasFactory;
    protected $connection = 'mysql';
    protected $table = 'user_score';
    public $timestamps = false;
    protected $fillable = [
        'score',
    ];
}
