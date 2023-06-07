<h2>Guten Morgen</h2>
@if($greet=="7:00am")
<h3>{{$greet}}</h3>
@elseif($greet=="12:30pm")
<h3>Guten Tag{{$greet}}</h3>
@else
<h3>Unknown User</h3>
@endif