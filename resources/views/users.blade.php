<x-header data="users Component Header" /> 
<!--forms validation-->
<h1>Users Login</h1>
 <form action="users" method="POST">
@csrf
<input type="text" name="username" placeholder="enter user id"/> <br/>
<span style="color: red">@error('username'){{$message}}@enderror</span>
<br>

<input type="password" name="userpassword" placeholder="enter user user password"/> <br/>
<span style="color: red">@error('userpassword'){{$message}}@enderror</span>
<br>
<button type="submit"> Login</button>