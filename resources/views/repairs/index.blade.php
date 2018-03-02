@extends ("layouts.app") 
@section("content")
<div class="container">
    <h2>Repairs</h2>
    <hr>
    <h3>Incomplete</h3>
    <hr> @foreach ( $repairs as $incomplete)
    <ul class="list-group">
        <li class="list-item">
            Property: <a href="/repairs/{{$repair->id}}" class="link">{{$repair->property_id}}</a>
        </li>
        <li class="list-item">
            Description: {{$repair->description}}
        </li>
        <li class="list-item">
            Created: {{$repair->created_at}}
        </li>
    </ul>
    @endforeach
    <br>
    <h3>Complete</h3>
    <hr> @foreach ( $repairs as $complete)
    <ul class="list-group">
        <li class="list-item">
            Property: <a href="/repairs/{{$repair->id}}" class="link">{{$repair->property_id}}</a>
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