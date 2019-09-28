<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Daftarkom extends Model
{
    protected $table = "daftarkomunitas";
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }


}
