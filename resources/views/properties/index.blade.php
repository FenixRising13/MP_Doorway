@extends ("layouts.app") 
@section("content")
<div class="container">
    <h2>Properties</h2>
    <hr>
    @foreach ( $properties as $property )
    <div class="card grey">
        <div class="card-content white-text">
            <span class="card-title"></span>
            <a href="/properties/{{$property->id}}" class="link">{{$property->addr}}</a>
        </div>
    </div>
    @endforeach
</div>
@endsection