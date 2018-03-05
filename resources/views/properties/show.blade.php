@extends ('layouts/app') 
@section ('content')
<div class='container'>
    <h2>{{$property->addr}}</h2>
    <hr>
    <b>Community: </b>{{$property->community}}<br>
    <b>Addr: </b>{{$property->addr}}<br>
    <b>Addr2: </b>{{$property->addr2}}<br>
    <b>City: </b>{{$property->city}}<br>
    <b>State: </b> {{$property->state}}<br>
    <b>Zip: </b> {{$property->zip}}<br>
    <hr>
    <b>Tenant: </b><br>
    <b>Lease Date: </b> {{$property->lease_date}}<br>
    <b>Rent: </b> ${{$property->rent}}<br>
    <br>
    <button class="waves-effect waves-light grey btn" onclick="location.href = 'https://www.google.com/maps/place/{{$property->addr}},{{$property->city}},{{$property->state}},{{$property->zip}}';">
        Google Maps
    </button>
    <button class="waves-effect waves-light grey btn" onclick="location.href = '/properties/{{$property->id}}/edit';">
        Edit Property
    </button>

</div>
@endsection