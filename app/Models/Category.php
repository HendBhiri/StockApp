<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public static function addCat($name)
    {
        return self::create([
            'name' => $name,
        ]);
    }

    public function modCat($name)
    {
        $this->update([
            'name' => $name,
        ]);
        return $this;
    }

    public function delCat()
    {
        $this->delete();
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
