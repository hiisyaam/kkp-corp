<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LineInduk extends Model
{
    //
    protected $table = 'line_induk';
    public $timestamps = false;

    public function lineDetail()
    {
        return $this->hasMany(LineDetail::class, 'line_induk_id');
    }
}
