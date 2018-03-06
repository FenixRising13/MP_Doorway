@extends ('layouts.app')
@section ('content')
<div class="container">
    @foreach ($histories as $history)
        <ul class='collection'>
            <li class='collection-item'>
                {{$history->$id}}
            </li>
            <li class='collection-item'>
                {{$history->$property_id}}
            </li>
            <li class='collection-item'>
                {{$history->$description}}
            </li>
        </ul>
    @endforeach
</div>
@endsection