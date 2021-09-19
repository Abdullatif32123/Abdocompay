<form action="/product/storeTheEditProduct/{{$product->id}}" method="post">
    @csrf
    Inter the name of product 
    <input type="text" name="name" value ="{{$product->name}}"/>
    <br/>
    Inter the price of the product 
    <input type ="text" name="price" value="{{$product->price}}"/>
    <br/>
    Inter the Lot of the product
    <input type="text" name="code" value ="{{$product->lot->code}}"/>
    <br/>
    <input type=submit value="edit the product"/>

</form>