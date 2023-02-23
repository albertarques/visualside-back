<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
    use HasFactory;

    public function categories()
    {
        return $this->belongsTo('App\Models\Categories');
    }
    public function jobs()
    {
        return $this->hasOne('App\Models\Advertiser');
    }
}
