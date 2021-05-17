<h1>User login</h1>

{{--
@if($errors->any())
@foreach($errors->all() as $err)
<li>{{$err}}</li>
@endforeach
@endif
--}}




<form action="users" method="POST">

@csrf
<input type="text" name="username" placeholder="Enter user Name">
<span style="color:red">@error('username'){{$message}} @enderror</span>
<br><br>
<input type="password" name="userpassword" placeholder="Enter user password">
<span style="color:red">@error('password'){{$message}} @enderror</span>
<br><br>
<button type="submit"> Login </button>
</form>