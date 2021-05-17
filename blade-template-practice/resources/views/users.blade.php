 {{-- <h1>Users page {{count($users)}}</h1> --}}


{{--
@if($user == 'anzar')
<h3>Hi {{$user}}</h3>
@elseif($user == 'sam')
<h3>Hlo {{$user}}</h3>
@else
<h3>Unknown user</h3>
@endif
--}}

{{--
@for($i=0;$i<10;$i++)
<h4>{{$i}}</h4>
@endfor
--}}


{{--
@foreach($users as $user)
<h1>{{$user}}</h1>
@endforeach  --}}

@include('inner')

<script>
var data = @json($users);
console.log(data);
</script>