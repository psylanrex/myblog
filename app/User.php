<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laratrust\Traits\LaratrustUserTrait;
use App\User;
use DB;

class User extends Authenticatable
{
    use Notifiable;
    use LaratrustUserTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    /**
     * Returns a user that is identified as super manager to send notifications to
     * There will be only one person in this position
     */
    public static function isSuperManager()
    {
        $manager_id = DB::table('users')
            ->select('users.id')
            ->join('role_user', 'role_user.user_id', '=', 'users.id')
            ->where('users.name', 'Kha')
            ->value('users.id');
        return User::find($manager_id);
    }
}
