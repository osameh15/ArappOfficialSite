<?php

namespace Badzohreh\Category\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = "categories";
    protected $guarded = [];

    public function parent()
    {
        return $this->belongsTo(Category::class, "parent_id", "id");
    }

    public function getParentNameAttribute()
    {
        return $this->parent ? $this->parent->name : "__";
    }
}
