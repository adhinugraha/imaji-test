<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserData extends Model
{
    use HasFactory;
    protected $connection = 'mysql';
    protected $table = 'user_data';
    public $timestamps = false;
    protected $fillable = [
        'name',
        'phone',
    ];
}
