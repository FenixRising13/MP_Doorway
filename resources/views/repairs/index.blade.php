@extends ("layouts.app") 
@section("content")
<div class="container">
    <h2>Repairs</h2>
    <hr>
    {{--  Incomplete Repairs  --}}
    <h3>Incomplete</h3>
    {{--  For Each for incomplete repairs  --}}
    <hr> @foreach ( $incomplete as $incomplete)
    <ul class="list-group">
        <li class="list-item">
            Property: <a href="/repairs/{{$incomplete->id}}" class="link">{{$incomplete->property_id}}</a>
        </li>
        <li class="list-item">
            Description: {{$incomplete->description}}
        </li>
        <li class="list-item">
            Created: {{$incomplete->created_at}}
        </li>
    </ul>
    @endforeach
    <br>
    {{--  Completed Repairs  --}}
    <h3>Complete</h3>
    {{--  For Each for completed repairs  --}}
    <hr> @foreach ( $repairs as $repair)
    <ul class="list-group">
        <li class="list-item">
            Property: <a href="/repairs/{{$repair->id}}" class="link">{{$repair->property_id}}</a>
            {{-- Using property would return the row of the property table --}}
        </li>
        <li class="list-item">
            Description: {{$repair->description}}
        </li>
        <li class="list-item">
            Created: {{$repair->created_at}}
        </li>
        <li class="list-item">
            Completed Date: {{$repair->completed_at}}
        </li>
        <li class="list-item">
            Completed By: {{$repair->contractor}}
        </li>
    </ul>
    @endforeach
    <br>
    <button class="waves-effect waves-light grey btn" onclick="location.href = '/repairs/create';">
        Create Repair Ticket
    </button>
</div>
@endsection