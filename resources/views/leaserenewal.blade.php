{{-- Notice of Lease Expiration --}} 
@extends('layouts.app') 
@section('content')
<div class="container">
    <div class="form">
        {{-- Heading --}}
        <h5>LEASE EXPIRATION/VACATING TENANT LETTER</h5>
        <br>
        <p>Date</p>
        <br>
        <p>Tenant</p>
        <p>Address</p>
        <p>City, State, Zip</p>
        <br>
        <p>Dear Tenant,</p>
        <br>
        <p>This notice concerns our Residential Lease Agreement dated __________, where you leased the premises located at ___________________________.</p>
        <p>Please accept this notice that your lease is set to expire on ___________. Please notify this office within the next
            30 days of your intent to renew your lease or vacate the premises.</p>
        <p>Per your lease agreement if there is any tenant holdover (non-renewal without intent to vacate), your monthly rent
            amount will be $_________.</p>
        <br>
        <p>If you have any questions, please contact me at _______________.</p>
        <br>
        <p>Sincerely,</p>
        <br>
        <p>__________________</p>
    </div>
</div>
@endsection