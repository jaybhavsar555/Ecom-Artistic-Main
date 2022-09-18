<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table ="products";
    protected $fillable=[
        'cate_id',
        'name',
        'slug',
        'small_description',
        'description',
        'original_price',
        'selling_price',
        'image',
        'qty',
        'tax',
        'status',
        'popular',
        'meta_title',
        'meta_keywords',
        'meta_description',
    ];

    public function category(){
        return $this->belongsTo(Category::class,'cate_id','id');
        // join between table product and category wherecategory.cate_id=product.id
    }
}

