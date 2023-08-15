<?php

namespace App\Models;

use App\Policies\DiscountPolicy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;


class Dress extends Model implements TranslatableContract
{
    use HasFactory;

    use Translatable;

    public $translatedAttributes = ['name' , 'description'];

    protected $fillable = [ 'category_id' ,'price' , 'quantity'  , 'photo' , 'active' , 'is_deleted' ];


    public function category()
    {
        return $this->belongsTo(Category::class , 'category_id' , 'id');
    }

    public function images()
    {
     return $this->hasMany(DressImage::class, 'dress_id');
    }


    public function product_discount(){
        return $this->belongsTo(DiscountProduct::class  , 'id' , 'dress_id');

    }

}