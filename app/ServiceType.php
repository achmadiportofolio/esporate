<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceType extends Model
{
    protected $table = "service";

    protected $fillable = [
        'service_name',

    ];

    public function category()
    {
        return $this->hasMany(Category::class, 'service_id', 'id');

    }
    public function product()
    {
        return $this->hasMany(Product::class, 'service_id', 'id');

    }
    public function banner()
    {
        return $this->hasMany(Banner::class, 'service_id', 'id');

    }


}
