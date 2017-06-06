<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

     public function role(){
         return $this->belongsToMany(role::class, 'role_users', 'user_id', 'role_id');
     }

     public function exame(){
         return $this->hasMany('App\Exames', 'users_id');
     }
     
    protected $fillable = [
        'name', 'email', 'password',
    ];

	  public function hasAnyRole($roles){
        if (is_array($roles)) {
            foreach ($roles as $role){
                if ($this->hasRole($role)){
                    return true;
                }
            }
        } else {
            if ($this->hasRole($roles)) {
                return true;
            }
        }
        return false;
    }

    public function hasRole($role){
        if ($this->role()->where('nome', $role)->first()){
        return true;
        }
    return false;
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
