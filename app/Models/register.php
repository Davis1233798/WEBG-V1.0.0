<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\register;
class register extends Model
{
    use HasFactory;
    protected $table = "registers";
    protected $fillable = ['name','email','phone'];
}
