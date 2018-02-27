@extends ('layouts/app') 
@section ('content')
<div class='container'>
    <h3>Editing: {{$user->name}}</h3>
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
            <input name="property" type="text" id="property" class="validate" placeholder="New Property ID"></textarea>
            <label for="property"></label>
        </div>
        <button class='btn grey' id=submit>
            Submit
          </button>
    </form>
    <hr>
    {{--  <form method=‘POST’ action=“/users/{{$user->id}}“>
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
        <div class="input-field col s12">
        <button class=“btn red” onclick=“return confirm(‘Are you sure to delete user?’)“>Delete
        </button>
    </form>  --}}
</div>
@endsection