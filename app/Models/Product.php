<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    

    protected $fillable = [
        'name', 
        'description', 
        'price',
        'stock',
        'material',
        'color',
        'image_url',
        'category_id',
    ];
    
    public function category() {
        return $this->belongsTo(Category::class);
    }   

    public function scopeFilter($query, $filters) {
        $query->when($filters['search'] ?? null, function ($query, $search) {
        $query->where('name', 'like', "%{$search}%");
    });

        $query->when($filters['category'] ?? null, function ($query, $category) {
        $query->where('category_id', $category);
    });

        $query->when($filters['color'] ?? null, function ($query, $color) {
        $query->where('color', $color);
    });

        $query->when($filters['material'] ?? null, function ($query,$material) {
        $query->where('material', $material);
    });

         $query->when($filters['price'] ?? null, function ($query, $price) {
        match ($price) {
            'low' => $query->where('price', '<', 20),
            'mid' => $query->whereBetween('price', [20, 50]),
            'high' => $query->where('price', '>', 50),
            default => null
        };
    });

    }
}
