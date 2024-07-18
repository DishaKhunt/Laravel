<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    use HasFactory;

    public $timestamp = false;

    // protected $guarade = [];

    protected $fillable = ['name', 'email', 'age', 'city'];
}
