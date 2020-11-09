<?php

namespace Badzohreh\Category\Repositories;

use Badzohreh\Category\Http\Requests\CategoryRequest;
use Badzohreh\Category\Models\Category;
use Illuminate\Support\Str;
use phpDocumentor\Reflection\Utils;

class CategoryRepo
{
    public function findById($id)
    {
        return Category::query()->findOrFail($id);
    }

    public function all()
    {
        return Category::all();
    }

    public function create($values)
    {
        return Category::create([
            "name" => $values->name,
            "slug" => $values->slug ? $values->slug : Str::slug($values->name),
            "parent_id" => $values->parent_id,
        ]);
    }

    public function delete($id)
    {
        $category = $this->findById($id);
        if ($category) {
            $category->delete();
        }
    }

    public function exceptById($categoryId)
    {
        return Category::query()->where("id", "!=", $categoryId)->get();
    }

    public function edit($id, $values)
    {
        $this->findById($id)->update([
            "name" => $values->name,
            "slug" => $values->slug,
            "parent_id" => $values->parent_id,
        ]);
    }
}