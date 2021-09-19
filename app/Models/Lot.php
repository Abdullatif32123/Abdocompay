<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lot extends Model
{
    use HasFactory;
    protected $fillable=["code"];
    public $timestamps = false;
    public function product(){
        return $this->belongsTo("App\Models\Product","products_id");
    }
}
