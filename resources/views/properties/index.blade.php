@extends ("layouts.app") 
@section("content")
<div class="container">
    <h3>Properties</h3>
    <hr>
    @foreach ( $properties as $property )
    <div class="card blue-grey darken-1">
        <div class="card-content white-text">
            <span class="card-title"></span>
            <h5><a href="/properties/{{$property->id}}">{{$property->addr}}</a></h5>
            <p>{{$property->tenant}}</p>
        </div>
        <div class="card-action">
            <a href="#">Update</a>
            <a href="#">Remove</a>
        </div>
    </div>
    @endforeach
</div>
@endsection