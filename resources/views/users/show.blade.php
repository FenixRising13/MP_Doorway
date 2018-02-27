@extends ('layouts/app') 
@section ('content')
<div class='container'>
    <h2>{{$user->name}}</h2>
    <hr>
    <b>{{$user->name}}</b><br>
    <b>Title:</b> {{$user->title}}<br>
    <b>Email:</b> {{$user->email}}<br>
    <b>Phone:</b> {{$user->phone}}<br>
    <hr>
    <button class="waves-effect waves-light grey btn" onclick="location.href = '/users/{{$user->id}}/edit';">
        Edit User
    </button>
</div>
@endsection