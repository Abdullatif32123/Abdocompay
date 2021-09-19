@foreach($products as $p)
{{"The Id of the product is :    ".$p->id.
"  And the name is : ".$p->name.
"  The price :".$p->price.
" The lot number is : ".$p->lot->code.
" To edit press " }}
<a href="/product/editOnePeoduct/{{$p->id}}">here</a>
{{" To delete press "}}
<a href="/market/deleteOneProductFromMarket/{{$m->id}}/{{$p->id}}"> here </a>
<br/>


@endforeach