<?php

namespace Badzohreh\User\Http\Controllers;

use App\Http\Controllers\Controller;
use Badzohreh\Media\Services\MediaService;
use Badzohreh\User\Http\Requests\UpdateUserRequest;
use Badzohreh\User\repositories\UserRepo;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function edit_profile()
    {
        $user = auth()->user();
        return view("User::edit-user", compact("user"));
    }

    public function updateUser(UpdateUserRequest $request, UserRepo $userRepo)
    {

        if ($request->hasFile("avatar")) {
            $file = $request->file("avatar");
            MediaService::upload($file,"image");
            return back();

        }


        if ($userRepo->update(auth()->id(), $request)) {
            newFeedBacks("عملیات موفقیت آمیز", "ویرایش با موفقیت انجام شد.", "success");
        } else {
            newFeedBacks("عملیات ناموفق", "در ویرایش کاربر خطایی به وجود امده است.", "error");
        }
        return back();
    }

}