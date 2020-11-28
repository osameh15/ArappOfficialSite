<?php

namespace Badzohreh\User\repositories;

use Badzohreh\User\Http\Requests\UpdateUserRequest;
use Badzohreh\User\Model\User;

class UserRepo
{

    public function findById($id)
    {
        return User::query()->findOrFail($id);

    }

    public function update($user_id, UpdateUserRequest $request)
    {
//        todo add password update
        return User::query()->find($user_id)->update([
            "name" => $request->name,
            "email" => $request->email,
            "mobile" => $request->mobile,
            "education" => $request->education,
            "bio" => $request->bio,
        ]);



    }

}