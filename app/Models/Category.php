<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\Product;

class Category extends Model
{
    use HasFactory;

    protected $table='categories';
    protected $fillable=[
        'name',
        'slug',
        'description',
        'status',
        'popular',
        'image',
        'meta_title',
        'meta_descrip',
        'meta_keywords',
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
