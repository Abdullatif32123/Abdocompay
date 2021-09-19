<form method="post" action="/market/StoreAddProductsToMarket/{{$market_id}}">
    @csrf
    <select name="products[]" multiple>
@foreach($products as $product)
<option value={{$product->id}}>{{$product->name}}</option>
@endforeach
    </select>
<br/>
    <input type ="submit" value="add the products"/>
</form>