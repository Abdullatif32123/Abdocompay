<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Market extends Model
{
    use HasFactory;
    protected $fillable =["name","address"];
    public $timestamps = false;

    public function products(){
        return $this->belongsToMany("App\Models\Product","App\Models\Market_Product","imarkets_id","products_id");
    }
}
