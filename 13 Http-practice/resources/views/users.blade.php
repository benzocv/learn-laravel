<h1>User List API</h1>
<table>
<tr>
    <td>ID</td>
    <td>Name</td>
    <td>Email</td>
    <td>Profile Photo</td>

</tr>
@foreach ($collection as $item)

<tr>
    <td>{{$item['id']}}</td>
    <td>{{$item['first_name']}}</td>
    <td>{{$item['email']}}</td>
    <td><img src="{{$item['avatar']}}" alt=""></td>

</tr>
@endforeach
</table> 