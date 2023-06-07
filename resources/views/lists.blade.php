<table border="1">
    @foreach ($data as $item)
    <tr>
<td>{{$item->ProductID}}</td>
<td>{{$item->ProductName}}</td>
<td>{{$item->SupplierID}}</td>
<td>{{$item->CategoryID}}</td>
<td>{{$item->Unit}}</td>
<td>{{$item->Price}}</td>

</tr>
 @endforeach
</table>