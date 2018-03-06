@extends ('layouts.app') 
@section ('content')
<div class="container">
    {{-- Header --}}
    <h3>History</h3>
    <hr> @foreach ($histories as $history)
    <ul class='collection'>
        <li class='collection-item'>
            <b>Property:</b>{{$history->property_id}}
        </li>
        <li class='collection-item'>
            <b>Description:</b>{{$history->description}}
        </li>
        <li class='collection-item'>
            <b>Rent:</b>{{$history->rent}}
        </li>
        <li class='collection-item'>
            <b>Date Received:</b>{{$history->received}}
        </li>
    </ul>
    @endforeach
</div>
@endsection