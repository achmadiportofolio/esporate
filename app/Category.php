<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "category";

//    protected $dates = ['deleted_at'];

    protected $fillable = [
        'city_code',
        'city_name',
        'city_name_full',
        'province_id',
    ];

    public function product()
    {
        return $this->hasMany(Product::class, 'category_id', 'id');

    }
    public function service()
    {
        return $this->belongsTo(ServiceType::class, 'service_id', 'id');

    }

}
