<h1>Member List</h1>

<form action="edit" method="POST">

@csrf
<input type="text" name="name" placeholder="Enter You Name" value="{{$data['name']}}"><br><br>
<input type="email" name="email" placeholder="Enter You Email" value="{{$data['email']}}"><br><br>
<input type="text" name="address" placeholder="Enter You Address" value="{{$data['address']}}"><br><br>

<button type="submit">Update</button>
</form>