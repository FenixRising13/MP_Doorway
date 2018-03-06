@extends ('layouts.app')
@section ('content')
<div class="container">
    @foreach ($history as $history)
        <ul class='collection'>
            <li class='collection-item'>
                {{$id}}
            </li>
            <li class='collection-item'>
                {{$property_id}}
            </li>
            <li class='collection-item'>
                {{$description}}
            </li>
        </ul>
    @endforeach
</div>
@endsection