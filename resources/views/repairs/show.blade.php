@extends ('layouts/app') 
@section ('content')
<div class='container'>
    <h2>{{$repair->property_id}}</h2>
    <hr>
    <b>Property: </b>{{$repair->property_id}}<br>
    <b>Description: </b>{{$repair->description}}<br>
    <b>Date Created: </b>{{$repair->created_at}}<br>
    <hr>
    <button class="waves-effect waves-light grey btn" onclick="location.href = '/repairs/{{$repair->id}}/edit';">
        Edit Ticket
    </button>
    <br><br>
    <form method="POST" action="{{ route('repairs.destroy', [$repair->id]) }}">
        {{ csrf_field() }} {{ method_field('DELETE') }}
        <button class="btn grey" type="submit">Delete</button>
    </form>
</div>
@endsection