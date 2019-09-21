<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adoption extends Model
{
    protected $table = "adoption";
    protected $guarded = [];

    public function myhewan()
    {
        return $this->belongsTo(Animaltype::class, 'id_animaltype');
    }
   
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
