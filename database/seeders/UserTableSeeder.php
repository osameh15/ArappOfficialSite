<?php

namespace Database\Seeders;

use Badzohreh\User\Model\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{

    public function run()
    {
        User::query()->create([
            "name"=>"Mohamamad",
            "email"=>"badzohreee@gmail.com",
            "password"=>'$2y$10$B50WSEs6wW3wcqLZRvTT0OSGn06WZ5HW/cF7URSFnmn/g94MOEA02',
            "email_verified_at"=>"2020-11-01 00:59:36"
        ]);
    }
}
