<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $fillable = [
        'name',
        'package_id',
        'tracking_number',
    ];

    public function packageDetails()
    {
        return $this->hasMany('App\PackageDetail');
    }
}
