<form action="storeTheNewMarket" method="post">
    @csrf
    Inter the name of market 
    <input type="text" name="name"/>
    <br/>
    Inter the address of the product 
    <input type ="text" name="address"/>
    <br/>
    
    <input type=submit value="Add the market"/>

</form>