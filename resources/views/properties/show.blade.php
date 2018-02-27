@extends ('layouts/app') 
@section ('content')
<div class='container'>
    <h3>{{$property->addr}}</h3>
    <hr>
    <b>Addr: </b>{{$property->addr}}<br>
    <b>City: </b>{{$property->city}}<br>
    <b>State: </b> {{$property->state}}<br>
    <b>Zip: </b> {{$property->zip}}<br>
    <hr>
    <b>Tenant: </b> {{$property->tenant}}<br>
    <button class="waves-effect waves-light grey btn" onclick="location.href = '/properties/{{$property->id}}/edit';">
        Edit Property
    </button>
</div>
@endsection