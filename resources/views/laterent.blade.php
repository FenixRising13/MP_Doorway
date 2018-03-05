@extends('layouts.app') 
@section('content')
<div class="container">
    <div class="form">
        <h3>Late Rent Notice</h3>
        {{-- {{$Date??}} --}} {{-- <br> --}} {{-- {{$property->tenant}}<br> --}} {{-- {{$property->addr}}<br> --}} {{-- {{$property->addr2}}<br>        --}} {{-- {{$property->city}}{{$property->state}}{{$property->zip}} --}}
        <p>Date</p>
        <br>
        <p>Tenant</p>
        <p>Address</p>
        <p>City, State, Zip</p>
        <br>
        <p>Dear Tenants,</p>
        <br>
        <p>This notice is to inform you that we have not received your rent payment for ____________, which was due by ________________.
            This was for the rental period of ______________ to _________________. If you have already paid in full please
            disregard this letter.</p>
        <br>
        <p>As of today, per your lease agreement, you have been assessed a $____ late fee. The total amount due as of today
            is $_______. This includes the $_______ monthly rent and $______ in late fees. If payment is not received Landlord
            may exercise its rights under the Florida Lease Agreement including eviction proceedings. Should it become necessary
            for Landlord to employ an attorney to enforce any of the conditions or covenants of the Florida Lease Agreement,
            including the collection of rentals or gaining possession of the Premises, Tenant will be responsible to pay
            all expenses so incurred, including reasonable attorneys' fees.</p>
        <br>
        <p>If you have any questions regarding this matter, you can contact me at _________________. Failure to pay the total
            amount noted on the above late rent notice, plus the additional late fees as they accrue, may result in further
            actions being taken, but not limited to eviction. Please govern yourself accordingly.</p>
        <br>
        <p>Sincerely,</p>
        <br>
        <p>________________</p>
    </div>
</div>
@endsection