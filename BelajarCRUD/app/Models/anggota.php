<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class anggota extends Model
{
    public $timestamp = true;
    protected $table = 'anggota';
    protected $fillable = ['nama', 'hp'];
}
