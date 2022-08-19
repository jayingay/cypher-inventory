<?php

namespace App\Models;
// use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    use HasFactory;
    protected $appends = ['product_image'];

    //Const
    public const STATUS_ACTIVE = 1;
    public const STATUS_INACTIVE = 0;

    //Methods
    public function getProductImageAttribute(){
        return asset('storage/product_images/'. $this->image);
    }


    //Relations
    public function category(){
        return $this->belongsTo(Category::class);
    }
    
    //Brand
    public function brand(){
        return $this->belongsTo(Brand::class);
    }

    //Size stock
    public function product_stocks(){
        return $this->hasMany(ProductSizeStock::class);
    }
}   
