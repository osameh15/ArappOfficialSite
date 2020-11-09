<?php

namespace Badzohreh\Category\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Monolog\Handler\IFTTTHandler;

class CategoryRequest extends FormRequest
{

    public function authorize()
    {
        return auth()->check() == true;
    }

    public function rules()
    {
        return [
            "name" => "required|string|min:3|max:100",
            "slug" => "nullable|string|min:3|max:100",
            "parent_id" => "nullable|exists:categories,id"
        ];

    }

    public function attributes()
    {
        return [
            "name" => "نام",
            "slug" => "نام انگلیسی",
            "parent_id" => "دسته پدر"
        ];
    }
}
