<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "product";

    protected $fillable = [
        'city_code',

    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');

    }

    public function banner()
    {
        return $this->hasMany(Banner::class, 'product_id', 'id');

    }
    public function service()
    {
        return $this->belongsTo(ServiceType::class, 'service_id', 'id');

    }

}
