<?php

namespace App\Http\Controllers\market;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Lot;
use App\Models\Market;
use App\Models\Market_Product;
use App\Models\Product;
use Illuminate\Http\Request;

use function PHPSTORM_META\map;

class MarketController extends Controller
{
    public function showAllMarkets(){
        $markets = Market::All();
        return view ("market/showAllMarkets",Array("markets"=>$markets));
    }
    public function addNewMarket (){
        return view ("market.addNewMarket");
    }
    
    public function storeTheNewMarket(Request $r){

        $m = Market::create(
           [
               "name"=>$r->name,
               "address"=>$r->address
           ]
        );
        return redirect("market/showAllMarkets");
    }

    public function showProductInMarket($market_id){
        $m =Market::find($market_id);
        $p = $m->products;
    
        return view("market/showProductInMarket",Array("products"=>$p,"m"=>$m));

    }

    public function deleteOneProductFromMarket ($market_id,$product_id){
        $market = Market::find($market_id);
        $p = Product::find($product_id);
        $x =Market_Product::where(["products_id"=>$p->id,"imarkets_id"=>$market->id]);
        $x->delete();
        return redirect ("market/showProductInMarket/$market_id");

    }

    public function deleteMarket($market_id){

        $market =Market::find($market_id);
        $market_product = Market_Product::where("imarkets_id",$market->id);
        $market_product->delete();
        $market->delete();
    }

    public function editMarket($market_id){
       $m= Market::find($market_id);
       return view ("market/editMarket",Array("market"=>$m));
    }


    public function storeTheEditMarket(Request $r,$market_id){
        $m= Market::find($market_id);
        $m->name = $r->name;
        $m->address=$r->address;
        $m->save();
        return redirect ("market/showAllMarkets");

    }

    public function addProductsToMarket($market_id){
        $products = Product::all();
        return view("market/addProductsToMarket",Array("products"=>$products,"market_id"=>$market_id));
    }

    public function StoreAddProductsToMarket(Request $r, $market_id){
        $m =Market::find($market_id);
       
        $m->products()->attach($r->products);
    }
}
