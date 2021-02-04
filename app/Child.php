<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Child extends Model
{
    protected $table = 'children';
    protected $guarded = [];

    public function family()
    {
        return $this->belongsTo(Family::class);
    }
}
