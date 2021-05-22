<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubSubCategory extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function cat(){
        return $this -> belongsTo(Category::class, 'cat_id');
    }
    public function subcat(){
        return $this -> belongsTo(SubCategory::class, 'subcat_id');
    }
}
