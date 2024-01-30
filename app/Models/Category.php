<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'category_name'
    ];

    public function subcategory()
    {
        return $this->belongsTo(SubCategory::class);
    }
    public function article()
    {
        return $this->hasMany(Article::class);
    }
}
