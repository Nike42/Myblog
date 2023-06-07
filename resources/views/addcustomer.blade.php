
<h2>Add Customers</h2>
<form action="add" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Enter firstname"/><br><br>
    <input type="text" name="city" placeholder="city Name"/><br><br>
    <input type="text" name="address" placeholder="Enter Address"/><br><br>

    <button type="submit">  Add Customer  </button>
</form>