<?php

namespace Badzohreh\User\Model;

use Hamcrest\DiagnosingMatcher;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable, HasRoles;

    protected $fillable = [
        'name',
        'email',
        'mobile',
        'password',
        'education',
        'avatar',
        'bio',
    ];
    protected $hidden = [
        'password',
        'remember_token',
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    const DIPLOMA_EDUCATION_TYPE = "diploma";
    const LICENTIATE_EDUCATION_TYPE = "licentiate degree";
    const MASTER_EDUCATION_TYPE = "master of Science";
    const DOCTORATE_EDUCATION_TYPE = "doctorate";

    public static $EDUCATION_TYPES = [
        self::DIPLOMA_EDUCATION_TYPE,
        self::LICENTIATE_EDUCATION_TYPE,
        self::MASTER_EDUCATION_TYPE,
        self::DOCTORATE_EDUCATION_TYPE
    ];


}
