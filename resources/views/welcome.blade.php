@extends ('layouts.main') 
@section('content')
<div class='container'>
    <br>
    <h5>Welcome to MP Doorway.</h5>
    <br>
    <h6>Here you will find the tools you need to be an exceptional property manager.</h6>
    <br>
    <form class="col s12">
        <div class="row">
            <div class="input-field col s6">
                <input id="first_name" type="text" class="validate">
                <label for="first_name">First Name</label>
            </div>
            <div class="input-field col s6">
                <input id="last_name" type="text" class="validate">
                <label for="last_name">Last Name</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input id="password" type="password" class="validate">
                <label for="password">Password</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input id="email" type="email" class="validate">
                <label for="email">Email</label>
            </div>
        </div>
        <button title='submit' class="btn waves-effect waves-light" type="submit" name="action">Submit
            <i class="material-icons right"></i>
        </button>
    </form>
</div>
@endsection