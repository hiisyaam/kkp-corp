<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wilayah extends Model
{
    protected $table = 'wilayah';
    public $timestamps = false;

    public function bagian()
    {
        return $this->hasMany(Bagian::class, 'wilayah_id');
    }
    public function lineInduk()
    {
        return $this->hasMany(LineInduk::class, 'wilayah_id');
    }
}