<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PackageDetail extends Model
{
    protected $fillable = [
        'name',
        'price',
        'qty',
        'weight',
        'package_id'
    ];

    public function package()
    {
        return $this->belongsTo('App\Package', 'package_id');
    }
}
