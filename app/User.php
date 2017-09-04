<?php

namespace zuriyakids;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Zizaco\Entrust\Traits\EntrustUserTrait;
use zuriyakids\Agen;

class User extends Authenticatable
{
    use Notifiable;
    use EntrustUserTrait;

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
    public $timestamps = false;
    // protected $primaryKey = 'email';

    public function getRoleAttribute()
    {
        return $this->roles()->first();
    }
    public function agen()
    {
        return $this->hasOne('zuriyakids\Agen','email', 'email');
    }
}
