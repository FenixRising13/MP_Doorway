@extends ("layouts.app") 
@section("content")
<div class="container">
    <h2>Properties</h2>
    <hr>
    @foreach ( $properties as $property )
    <ul class="collection">
        <li class="collection-item">
            <a href="/properties/{{$property->property_id}}" class="link">{{$property->addr}}</a>
        </li>
    </ul>
    @endforeach
</div>
@endsection