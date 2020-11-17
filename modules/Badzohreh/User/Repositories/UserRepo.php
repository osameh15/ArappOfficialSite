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

    public function update($id, UpdateUserRequest $request)
    {
//        todo add password update
        return $this->findById($id)->update([
            "name" => $request->name,
            "email" => $request->email,
            "education" => $request->education,
            "bio" => $request->bio,
        ]);

    }

}