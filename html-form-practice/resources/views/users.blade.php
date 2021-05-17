<h1>User login</h1>

{{$errors}}
<form action="users" method="POST">

@csrf
<input type="text" name="username" placeholder="Enter user Name">
<br><br>
<input type="password" name="userpassword" placeholder="Enter user password">
<br><br>
<button type="submit"> Login </button>
</form>