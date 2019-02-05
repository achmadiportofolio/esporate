<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $table = "product_banner";

    protected $casts = [
        'valid_start_date'=>'date',
        'valid_end_date'=>'date'
    ];

    protected $fillable = [
        'valid_start_date',
        'valid_end_date',

    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');

    }
    public function service()
    {
        return $this->belongsTo(ServiceType::class, 'service_id', 'id');

    }

}
