<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $table = "report";
    protected $guarded = [];

    public function kat_pelaporan()
    {
        return $this->belongsTo(Katpelaporan::class, 'id_katpelaporan');
    }

    public function myhewan()
    {
        return $this->belongsTo(Animaltype::class, 'id_animaltype');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
