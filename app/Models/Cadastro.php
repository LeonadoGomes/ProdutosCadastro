<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cadastro extends Model
{
    protected $table = 'cadastro';
    protected $fillable = ['name', 'surname', 'login', 'password'];

    protected $guarded = [];
}
