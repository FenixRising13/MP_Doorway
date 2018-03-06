@extends ('layouts.app') 
@section ('content')
<div class="container">
    {{-- Header --}}
    <h3>History</h3>
    <hr> @foreach ($histories as $history)
    <b>Property: </b>{{$history->property_id}}
    <b>Description: </b>{{$history->description}}
    <b>Rent: </b>{{$history->rent}}
    <b>Date Received: </b>{{$history->received}} @endforeach
    <button class="waves-effect waves-light grey btn">Enter Rent</button>
</div>
@endsection