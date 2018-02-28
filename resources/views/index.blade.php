@extends ('layouts.app') 
@section ('content')
<div class="container">
    <h2 class="title">
        MP Doorway
    </h2>
    <br>
    <div id="description">
        Managed Property "MP" Doorway is your tool for property management. Tenants are stored as users and relationally matched
        to the properties which they occupy.
    </div>
    <br>
    <div class="links">
        <a href="/users" class="link">Users</a><br>
        <a href="/properties" class="link">Properties</a><br>
        <a href="/repairs" class="link">Repairs</a><br>
    </div>
</div>
@endsection