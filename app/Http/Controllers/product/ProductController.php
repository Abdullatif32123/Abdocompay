<?php

namespace App\Http\Controllers\product;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Lot;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showAllProducts (){

        $products = Product::All();
        return view("product/showAllProducts",Array("products"=>$products));

    }

    public function addNewProduct (){
        return view ("product.addNewProduct");
    }

    public function storeTheNewProduct(ProductRequest $r){
       $p= Product::create(
            
                ["name"=>$r->name,
                "price"=>$r->price,
               
                ]);           
        $l = new Lot    ();
        $l->code = $r->code;
        $p->lot()->save($l);
                return redirect('product/showAllProducts');
    }

    public function editOnePeoduct($product_id){
        $p=Product::find($product_id);
        return view ("product.editOnePeoduct",Array("product"=>$p));
    }

    public function storeTheEditProduct(ProductRequest $r,$product_id){
            $p=Product::find($product_id);
            $p->name = $r->name;
            $p->price =$r->price;
            $p->lot->code = $r->code;
            $p->save();


            $l = Lot::find($p->lot->id);
            $l->code = $r->code;
            $l->save();
           

            return redirect ("product/showAllProducts");

    }

    public function deleteOneProduct ($product_id){

        $p = Product::find($product_id);
        $l = Lot::find($p->lot->id);
        $l->delete();
        $p->delete();
        return redirect ("product/showAllProducts");

    }
}
