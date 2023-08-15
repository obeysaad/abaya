<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiscountProduct extends Model
{
    use HasFactory;


    use HasFactory;

    protected $fillable = ['dress_id' ,  'discount_id'  ];



    public function discount(){
        return $this->belongsTo(Discount::class  , 'discount_id' , 'id');

    }

}