<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ["name","price"];
    public $timestamps = false;

    public function lot(){
        return $this->hasOne("App\Models\Lot","products_id");
    }

    public function market(){
        return $this->belongsToMany("App\Models\Market","App\Models\Market_Product","products_id","imarkets_id");
    }

}
