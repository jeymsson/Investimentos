<?php

namespace App\Entities;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class User extends Authenticatable
{
    use SoftDeletes;
    use Notifiable;

    public $timestamps 	= true;
    protected $table	= 'users';
    protected $fillable = [ 'cpf', 'name', 'phone', 'birth', 'gender', 'notes', 'email', 'password', 'status', 'permission' ];
    protected $hidden   = [ 'password', 'remember_token' ];
}
