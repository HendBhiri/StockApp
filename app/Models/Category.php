<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    // Create a new category
    public static function createCategory($name)
    {
        return self::create([
            'name' => $name,
        ]);
    }

    // Update the category's name
    public function updateCategoryName($name)
    {
        $this->update([
            'name' => $name,
        ]);
        return $this;
    }

    // Delete the category
    public function removeCategory()
    {
        $this->delete();
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
