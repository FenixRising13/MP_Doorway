@extends ('layouts/app') 
@section ('content')
<div class='container'>
    <h3>{{$user->name}}</h3>
    <hr>
    <b>{{$user->name}}</b><br>
    <b>Title:</b> {{$user->title}}<br>
    <b>Email:</b> {{$user->email}}<br>
    <hr>
    <button class="waves-effect waves-light grey btn" onclick="location.href = '/users/{{$user->id}}/edit';">
        Edit User
    </button>
</div>
@endsection