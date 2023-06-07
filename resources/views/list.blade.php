<h1>Employees List</h1>
<table border="1">
    <tr>
<td>EmployeeID</td>
<td>LastName</td>
<td>FirstName</td>
<td>BirthDate</td>
</tr>
@foreach($employees as $employee)
<tr>
<td>{{$employee['EmployeeID']}}</td>
<td>{{$employee['LastName']}}</td>
<td>{{$employee['FirstName']}}</td>
<td>{{$employee['BirthDate']}}</td>
</tr>
@endforeach
</table>