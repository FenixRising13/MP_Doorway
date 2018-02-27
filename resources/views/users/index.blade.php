@extends ("layouts.app") 
@section("content")
<div class="container">
    <h3>Users</h3>
    <hr>
    <ul class="list-group">
        @foreach ( $users as $user )
        <li class="list-item-group">
            Name: <a href="/users/{{$user->id}}">{{$user->name}}</a>
            Title: {{$user->title}}
            Phone: {{$user->phone}}
        </li>
        @endforeach
    </ul>
</div>
@endsection