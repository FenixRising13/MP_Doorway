{{--  Properties@Index  --}}
@extends ('layouts.app') 
@section('content')
<div class='container'>
    {{--  Header  --}}
    <h2>Properties</h2>
    <hr>
    {{--  Collection of Properties  --}}
    @foreach ( $properties as $property )
    <ul class="collection">
        <li class="collection-item">
            <a href="/properties/{{$property->id}}" class="link">{{$property->addr}}</a>
        </li>
    </ul>
    @endforeach

    <button class="waves-effect waves-light grey btn" onclick="location.href = '/properties/create';">
        Add New Property
    </button>
</div>
@endsection