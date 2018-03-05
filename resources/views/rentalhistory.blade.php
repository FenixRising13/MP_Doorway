@extends('layouts.app') @section('content')
<div class="container">
    <form action="">
        <div class="input-field col s12 l6">
            <input type="text" id="date" class="validate">
            <label for="date">Date</label>
        </div>
        <div class="input-field col s12 l6">
            <input type="text" id="tenant" class="validate">
            <label for="tenant">Tenant</label>
        </div>
        <div class="input-field col s12 l6">
            <input type="text" id="property_id" class="validate">
            <label for="property_id">Property</label>
        </div>
        <div class="input-field col s12">
            <input type="rent" id="rent" class="validate">
            <label for="rent">Rent</label>
        </div>
    </form>
</div>
@endsection