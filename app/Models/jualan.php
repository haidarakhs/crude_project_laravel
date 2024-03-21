<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jualan extends Model
{
    use HasFactory;
    protected $table = "jualans";
    protected $fillable = ['nama', 'tipe'];
}
