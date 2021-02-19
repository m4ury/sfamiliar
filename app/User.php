<?php

namespace app;

use illuminate\contracts\auth\mustverifyemail;
use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
//use illuminate\foundation\auth\user as authenticatable;
use Illuminate\Database\Eloquent\Model;
use illuminate\notifications\notifiable;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{
    use Authenticatable, CanResetPassword;

    /**
     * the attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'rut', 'apellido_paterno', 'apellido_materno'
    ];

    /**
     * the attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * the attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function adminlte_image()
    {
        return 'https://source.unsplash.com/random/300x300';
        //return 'https://picsum.photos/300/300';
    }

    public function adminlte_desc()
    {
        return $this->type;
    }
}
