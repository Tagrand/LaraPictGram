<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pict extends Model
{
    protected $guarded = [];

    public function hints()
    {
       return $this->hasMany(Hint::class);
    }
}
