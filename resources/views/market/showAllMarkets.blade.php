@foreach($markets as $m)
{{"The Id of the market is :    ".$m->id.
"  And the name is : ".$m->name.
"  The Address :".$m->address.
" To edit press " }}
<a href="/market/editMarket/{{$m->id}}">here</a>
{{" To delete press "}}
<a href="/market/deleteMarket/{{$m->id}}"> here </a>
{{"TO see the products press "}}
<a href="/market/showProductInMarket/{{$m->id}}">here</a>
<br/>

@endforeach