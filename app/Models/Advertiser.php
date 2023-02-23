<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advertiser extends Model
{
    use HasFactory;

    public function jobs()
    {
        return $this->hasMany('App\Models\Jobs');
    }

}
