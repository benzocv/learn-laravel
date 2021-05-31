<h1>Add Member</h1>
<form action="" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Enter Name"><br><br>
    <input type="email" name="email" placeholder="Enter Email"><br><br>
    <input type="text" name="address" placeholder="Enter Address"><br><br>
    <button type="submit">Ente Details</button>
</form>