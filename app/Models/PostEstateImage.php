<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostEstateImage extends Model
{
    use HasFactory;
    protected $table ="post_estate_images";
    protected $fillable =[
        'post_id',
        'image',
        'video_link',
        'video_description',
    ];
}

