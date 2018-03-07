@extends ('layouts.app')
@section ('content')

<div class='container'>
    <h2>Create A User</h2>
    <hr>
    <form action="/users" method="POST">
            {{ csrf_field() }} {{ method_field('POST') }}
            <div class="input-field col s12 l6">
                <input name="name" type="text" id="name" class="validate" placeholder="New Name">
                <label for="name"></label>
            </div>
            <div class="input-field col s12">
                <input name="email" type="email" id="email" class="validate" placeholder="New Email">
                <label for="email" data-error="wrong" data-success="right"></label>
            </div>
            <div class="input-field col s12">
                <input name="password" type="password" id="password" class="validate" placeholder="New Password">
                <label for="password"></label>
            </div>
            <div class="input-field col s12">
                <input name="title" type="text" id="title" class="validate" placeholder="New Title">
                <label for="title"></label>
            </div>
            <div class="input-field col s12">
                <input name="phone" type="text" id="phone" class="validate" placeholder="New Phone">
                <label for="phone"></label>
            </div>
            <div class="input-field col s12">
                <input name="property_id" type="number" id="property_id" class="validate" placeholder="New Property ID">
                <label for="property_id"></label>
            </div>
            <button class='btn grey' id=submit>
                    Submit
                  </button>
    </form>
</div>

@endsection