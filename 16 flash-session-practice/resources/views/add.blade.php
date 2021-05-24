<h1>Add Member</h1>
<form action="" method="POST">
    @csrf
    <input type="text" name="user" placeholder="Enter user name"> <br><br>
    <input type="password" name="password" placeholder="Enter your password"> <br><br>
    <input type="email" name="email" placeholder="Enter your email"> <br><br>
    <button type="submit">Add Member</button>
</form>