<form action="/market/storeTheEditMarket/{{$market->id}}" method="post">
    @csrf
    Inter the name of market 
    <input type="text" name="name" value ="{{$market->name}}"/>
    <br/>
    Inter the address of the market 
    <input type ="text" name="address" value="{{$market->address}}"/>
    <br/>
    <input type=submit value="edit the market"/>

</form>