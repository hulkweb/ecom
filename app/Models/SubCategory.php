<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $fillable = ['title', 'details', 'image', 'category_id'];
    use HasFactory;
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
