<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostEstateDetail extends Model
{
    use HasFactory;  protected $table="post_estate_details";
    protected $primaryKey ="estate_detail_id";
    // protected $foreignKey=['entrepreneur_cat_id','province_id','district_id'];
    protected $fillable=[
        'post_id',
        'bedroom',
        'bathroom',
        'floor_area',
        'floor_level',
        'car_space',
        'land_area',
        'total_floor',
        'completion_year',
        'air_conditioning',
        'hot_water',
        'furniture',
        'security',
        'balcony',
        'gym_center',
        'swimming_pool',
        'lift',
        'on_main_road',
        'garden',
        'ideal_for_investors',
        'expat_friendly',
        'close_to_park',
        'close_to_school',
        'close_to_shop',

    ];
}
