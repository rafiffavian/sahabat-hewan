<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = "event";
    protected $guarded = [];

    public function mywilayah()
    {
        return $this->belongsTo(Jakartatype::class, 'id_jakartatype');
    }

    public function myhewan()
    {
        return $this->belongsTo(Animaltype::class, 'id_animaltype');
    }
}
