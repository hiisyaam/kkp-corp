<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agen extends Model
{
    protected $table = 'agen';

    public function kota()
    {
        return $this->belongsTo(Kota::class, 'kota_id');
    }
}
