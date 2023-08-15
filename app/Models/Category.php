<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Category extends Model  implements TranslatableContract
{
    use HasFactory;

    use Translatable;

    public $translatedAttributes = ['name'];

    protected $fillable = [ 'photo' , 'active' , 'is_deleted'  ];


    public function dresss()
    {
        return $this->hasMany(Dress::class , 'category_id' , 'id');
    }
}