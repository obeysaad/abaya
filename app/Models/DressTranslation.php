<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DressTranslation extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = ['name' , 'description'] ;
}