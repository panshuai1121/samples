<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Notifications\ResetPassword;
class User extends Authenticatable
{
    use Notifiable;


    /**
     * The attributes that are mass assignable.
     * 过滤用户提交的字段 只有包含该属性字段才能被更新
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

    protected $table = 'users';

    //用户头像
    public function gravatar($size = '100')
    {
        $hash = md5(strtolower(trim($this->attributes['email'])));
        return "http://www.gravatar.com/avatar/$hash?s=$size";
    }

    public static function boot()
    {
      parent::boot();

      static::creating(function ($user) {
          $user->activation_token = str_random(30);
      });
    }

    public function sendPasswordResetNotification($token)
    {
          $this->notify(new ResetPassword($token));
    }
}
