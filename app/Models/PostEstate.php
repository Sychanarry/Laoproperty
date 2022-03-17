<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostEstate extends Model
{
    use HasFactory;
    protected $table="post_estates";
    protected $fillable=[
        'post_id',
        'title',
        'detail',
        'sale_price',
        'rent_price',
        'province_id',
        'district_id',
        'post_date',
        'lat',
        'lng',
        'property_mode',
        'type_id',
        'public_status',
        'public_date',
        'estate_detail_id'
    ];
}
