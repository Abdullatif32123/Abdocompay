<form action="storeTheNewProduct" method="post">
    @csrf
    Inter the name of product 
    <input type="text" name="name"/>
    <br/>
    Inter the price of the product 
    <input type ="text" name="price"/>
    <br/>
    Inter the Lot of the product
    <input type="text" name="code"/>
    <br/>
    <input type=submit value="Add the product"/>

</form>