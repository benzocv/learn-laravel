 {{-- <h1>Users page {{count($users)}}</h1> --}}

 @if($user == 'anzar')
<h3>Hi {{$user}}</h3>
@elseif($user == 'sam')
<h3>Hlo {{$user}}</h3>
@endif
