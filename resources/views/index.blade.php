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
        <br><br>
        <ul class="collection">
            <li class="collection-item">
                Use Forms to send notices to tenants
            </li>
            <li class="collection-item">
                Collect and track rent payments
            </li>
            <li class="collection-item">
                Generate reports for tenant rental history
            </li>
        </ul>
    </div>
    <br>

    <div class="links">
        <a href="/users" class="link">Users (Tenants/Managers/Contractors)</a><br>
        <a href="/properties" class="link">Properties</a><br>
        <a href="/repairs" class="link">Repair Tickets</a><br>
        <a href="/forms" class="link">Forms</a><br>
        <a href="/rentalhistory" class="link">Log Rents</a><br>
    </div>
</div>
@endsection
