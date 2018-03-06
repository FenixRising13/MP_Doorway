@extends ('layouts.app')
@section ('content')
<div class="container">
    <form method:"POST" action="/history/store">
            {{ csrf_field() }} {{ method_field('PATCH') }}
        <div class="input-field col s12 l6">
            <input type="date" id="received" class="validate" placeholder='Date Received'>
        </div>
        {{-- This should be a dropdown to select a property --}}
        <div class="input-field col s12 l6">
            <input type="number" id="property_id" class="validate">
            <label for="property_id">Property</label>
        </div>
        <div class="input-field col s12 l6">
            <input type="text" id="rent" class="validate">
            <label for="rent">Rent</label>
        </div>
        <button class="waves-effect waves-light grey btn" id=submit>
            Submit
          </button>
    </form>
</div>
@endsection