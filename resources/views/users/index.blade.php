@extends ("layouts.app") 
@section("content")
<div class="container">
    <h2>Users</h2>
    <hr>
    <ul class="list-group">
        @foreach ( $users as $user )
        <li class="list-item">
            Name: <a href="/users/{{$user->id}}" class="link">{{$user->name}}</a> Title: {{$user->title}}
        </li>
        @endforeach
    </ul>
</div>
@endsection