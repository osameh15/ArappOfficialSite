<?php

namespace Badzohreh\RolePermission\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoleRequest extends FormRequest
{

    public function authorize()
    {
        return auth()->check() == true;
    }

    public function rules()
    {
        $rules = [
            "name" => "required|string|min:3|max:50|unique:roles,name",
            "permissions" => "required|array|min:1",
        ];
        if ($this->isMethod("PATCH")) {
            $rules["name"] = "required|string|min:3|max:50|unique:roles,name," . $this->route("role");
        }
        return $rules;
    }

    public function attributes()
    {
        return [
            "permissions" => "مجوز ها"
        ];
    }
}
