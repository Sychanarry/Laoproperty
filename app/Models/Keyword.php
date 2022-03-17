<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keyword extends Model
{
    use HasFactory;
    protected $table ="keyword";
    protected $primaryKey="keyword_id";
    protected $foreignKey=['province_id','district_id'];
    protected $fillable=[
        'province_id',
        'district_id',
        'type_id',
        'property_mode',
        'min_price',
        'max_price'
    ];
    public function province(){
        return $this->belongsTo(Province::class,'province_id','id');
        echo $this;
    }
    public function district(){
        return $this->belongsTo(District::class,'district_id','district_id');
    }
}
