<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'category_id', 'stock', 'image', // Add 'image' to the array
    ];
    public static function addProd($name, $category_id, $stock,$image)
    {
        return self::create([
            'name' => $name,
            'category_id' => $category_id,
            'stock' => $stock,
            'image' => $image,
        ]);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
