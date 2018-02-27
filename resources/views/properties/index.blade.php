@extends ("layouts.app") 
@section("content")
<div class="container">
    <h2>Properties</h2>
    <hr>
    @foreach ( $properties as $property )
    <div class="card grey">
        <div class="card-content white-text">
            <span class="card-title"></span>
            <h5><a href="/properties/{{$property->id}}" class="link">{{$property->addr}}</a></h5>
        </div>
    </div>
    @endforeach
</div>
@endsection