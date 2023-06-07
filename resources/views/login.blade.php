
<h2>Form Login page </h2>
<form action="form" method="POST">
    @csrf
    <input type="text" name="username" placeholder="user name"/><br><br>
    <input type="password" name="userpassword" placeholder="user password"/><br><br>
    <button type="submit"><a href="/profile">Login</a></button>
</form>