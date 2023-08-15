<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DressImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'url', 'dress_id'
       ];


  public function dress()
     {
       return $this->belongsTo(Dress::class, 'dress_id');
     }
}