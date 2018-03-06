@extends ('layouts.app') 
@section ('content')

<div class='container'>
    <h2 style='font-style:italic'>Editing: {{$user->name}}</h2>
    <hr>
    <div class='description'>
        <b>Name:</b> {{$user->name}}<br>
        <b>Title:</b> {{$user->title}}<br>
        <b>Email:</b> {{$user->email}}<br>
        <b>Phone:</b> {{$user->phone}}<br>
        <b>Property:</b> {{$user->property_id}}<br>
    </div>
    <hr>
    <form method="post" action="/users/{{$user->id}}">
        {{ csrf_field() }} {{ method_field('PATCH') }}
        <div class="input-field col s12 l6">
            <input name="name" type="text" id="name" class="validate" placeholder="New Name">
            <label for="name"></label>
        </div>
        <div class="input-field col s12">
            <input name="email" type="email" id="email" class="validate" placeholder="New Email">
            <label for="email" data-error="wrong" data-success="right"></label>
        </div>
        <div class="input-field col s12">
            <input name="title" type="text" id="title" class="validate" placeholder="New Title">
            <label for="title"></label>
        </div>
        <div class="input-field col s12">
            <input name="phone" type="text" id="phone" class="validate" placeholder="New Phone">
            <label for="phone"></label>
        </div>
        <button class='btn grey' id=submit>
            Submit
          </button>
    </form>
    <hr>
</div>

@endsection