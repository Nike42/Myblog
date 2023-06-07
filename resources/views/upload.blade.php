
<h2>Upload File  </h2>
<form action="upload" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="file"/><br><br>
    <input type="password" name="userpassword" placeholder="user password"/><br><br>
    <button type="submit"> Upload File </button>
</form>