@extends ('layouts.app') 
@section ('content')

<div class='container'>
    <h2>{{$user->name}}</h2>
    <hr>
    <div class="description">
        <b>Name:</b> {{$user->name}}<br>
        <b>Title:</b> {{$user->title}}<br>
        <b>Email:</b> {{$user->email}}<br>
        <b>Phone:</b> {{$user->phone}}<br>
        <b>Property:</b> {{$user->property_id}}<br>
    </div>
    <hr>
    <button class="waves-effect waves-light grey btn" onclick="location.href = '/users/{{$user->id}}/edit';">
        Edit User
    </button>
</div>

@endsection