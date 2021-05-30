<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function brand(){
        return $this -> belongsTo(Brand::class, 'brand_id', 'id');
    }
    public function cat(){
        return $this -> belongsTo(Category::class, 'cat_id', 'id');
    }
    public function subCat(){
        return $this -> belongsTo(SubCategory::class, 'subcat_id', 'id');
    }
    public function subSubCat(){
        return $this -> belongsTo(SubSubCategory::class, 'subsubcat_id', 'id');
    }
}
