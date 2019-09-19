<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    protected $table = "user";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name','last_name','gender','no_tlp','email', 'username','id_adoption','image','description','provinsi','kota', 'password','tanggal_lahir','whatsapp','kelurahan','id_role'
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
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function daftarkom()
    {
        return $this->hasMany(Daftarkom::class, 'id_user');
    }

    public function adoption()
    {
        return $this->hasMany(Adoption::class, 'id_user');
    }
    public function myrole()
    {
        return $this->belongsTo(Role::class, 'id_role');
    }
}
