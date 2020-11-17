<?php

namespace Badzohreh\User\Http\Requests;

use Badzohreh\User\Model\User;
use Badzohreh\User\Rules\ValidMobileRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateUserRequest extends FormRequest
{
    public function authorize()
    {
        return auth()->check() == true;
    }

    public function rules()
    {
        return [
            "name" => "required|string|max:255",
            "email" => "required|string|email|max:255|unique:users,email," . $this->user()->id,
//            "mobile" => ["required", "numeric","unique:users,mobile", new ValidMobileRule(),],
            "new_password" => "nullable|string|min:8|confirmed",
            "education" => "required|" . Rule::in(User::$EDUCATION_TYPES),
            "bio" => "nullable|string|min:20",
        ];
    }

    public function attributes()
    {
        return [
            "name" => "نام",
            "email" => "ایمیل",
            "mobile" => "موبایل",
            "education" => "تحصیلات",
            "new_password" => "پسورد جدید",
            "bio" => "بیوگرافی",
        ];
    }
}
