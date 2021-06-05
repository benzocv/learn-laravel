<h1>Member List</h1>

<table>
    <tr>
        <td>Id</td>
        <td>Name</td>
        <td>Email</td>
        <td>Address</td>
        <td>Action</td>
    </tr>

    @foreach ($members as $item)
    <tr>
        <td>{{$item['id']}}</td>
        <td>{{$item['name']}}</td>
        <td>{{$item['email']}}</td>
        <td>{{$item['address']}}</td>
        <td>
            <a href="delete/{{$item['id']}}">Delete</a>
            &nbsp;
            <a href="edit/{{$item['id']}}">Edit</a>
        </td>
        
    </tr>
    @endforeach
</table>