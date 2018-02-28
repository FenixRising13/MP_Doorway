@extends ('layouts.app'); 
@section ('content');
<div class="container">
    <div class="description">
        <b>Property: </b>{{$repair->property_id}}<br><b>Description: </b>{{$repair->description}}<br><b>Date Created: </b>{{$repair->created_at}}<br>
    </div>
    <form method="post" action="/repairs/{{$repair->id}}">
        {{ csrf_field() }} {{ method_field('PATCH') }}
        <div class="input-field col s12">
            <input name="description" type="text" id="description" class="validate" placeholder="Update Description"></textarea>
            <label for="description"></label>
        </div>
        <button class='btn grey' id=submit>
        Submit
      </button>
    </form>
</div>
@endsection