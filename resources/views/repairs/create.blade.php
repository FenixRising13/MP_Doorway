@extends ('layouts/app') 
@section ('content')
<div class="container">
    <h2>Create Repair Ticket</h2>
    <hr>
    <form action="/repairs" method="POST">
        {{ csrf_field() }} {{ method_field('POST') }}
        <div class="input-field col s12 l6">
            <input type="text" id="property_id" class="validate" placeholder="Property ID">
            <label for="property_id"></label>
        </div>
        <div class="input-field col s12 l6">
            <input type="text" id="description" class="validate" placeholder="Description">
            <label for="description"></label>
        </div>
        <button class="btn grey" id="submit">
        Submit
    </button>
    </form>
</div>
@endsection