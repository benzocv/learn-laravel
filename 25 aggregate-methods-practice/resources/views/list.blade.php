<table>
<tr>
    <td>Id</td>
    <td>Name</td>
    <td>Email</td>
    <td>Address</td>
    <td>Action</td>
</tr>
   
    @foreach ($data as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->address}}</td>
            <td></td>
        </tr>
    @endforeach
</table>