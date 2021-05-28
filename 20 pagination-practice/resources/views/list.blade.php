<h1>Member List</h1>


<table>
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Email</td>
        <td>Address</td>
    </tr>
    @foreach ($members as $member)
    <tr>
        <td>{{$member['id']}}</td>
        <td>{{$member['name']}}</td>
        <td>{{$member['email']}}</td>
        <td>{{$member['address']}}</td>
    </tr> 
    @endforeach
</table>

<span>
    {{$members->links()}}
</span>
<style>
    .w-5{
        display:none;
    }
</style>