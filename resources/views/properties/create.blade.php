{{-- Properties@Create --}} 
@extends('layouts.app') 
@section('content')
<div class="container">
    <form action="/properties" method="POST">
        {{ csrf_field() }} {{ method_field('POST') }}
        <div class="input-field col s12 l6">
            <input type="text" id="addr" class="validate" placeholder="Address">
            <label for="addr"></label>
        </div>
        <div class="input-field col s12 l6">
            <input type="text" id="addr2" class="validate" placeholder="Address 2">
            <label for="addr2"></label>
        </div>
        <div class="input-field col s12 l6">
            <input type="text" id="city" class="validate" placeholder="City">
            <label for="city"></label>
        </div>
        <div class="input-field col s12 l6">
            <input type="text" id="state" class="validate" placeholder="State">
            <label for="state"></label>
        </div>
        <div class="input-field col s12 l6">
            <input type="number" id="zip" class="validate" placeholder="Zip">
            <label for="zip"></label>
        </div>
        <div class="input-field col s12 l6">
            <input type="text" id="community" class="validate" placeholder="Community">
            <label for="community"></label>
        </div>
        <div class="input-field col s12 l6">
            <input type="date" id="lease_date" class="validate" placeholder="Lease Date">
            <label for="lease_date"></label>
        </div>
        <button class="btn grey" id="submit">
            Submit
        </button>
    </form>
</div>
@endsection