<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LineDetail extends Model
{
    //
    protected $table = 'line_detail';

    public function lineInduk()
    {
        return $this->belongsTo(LineInduk::class, 'line_induk_id');
    }

    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'kelas_id');
    }
}
