<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Family extends Model
{
    protected $table = 'families';
    protected $guarded = [];

    public function children()
    {
        return $this->hasMany(Child::class);
    }
}   
