{{-- Three Day Notice Form --}} 
@extends('layouts.app') 
@section('content')
<div class="container">
    <div class="form">
        {{-- Heading --}}
        <h5 style='text-align:center'>Three-Day Notice to Tenant</h5>
        <h5 style='text-align:center'>Demand for Payment or Possession</h5>
        <br>
        <h6 style='text-align:center;font-weight:bold;'> Florida Statutes 83.56</h6>
        <br>
        County, Florida<br>
        Date<br>
        <br> Tenant
        <br> Address
        <br> City State Zip<br>
        <br>
        <p>Mr/Mrs. _________________, This notice is to inform you that we have not received your rent payment for ___________________,
            which was due by ____________________ by _________. This was for the rental period of ____________________ to
            ____________________. You are hereby notified that you are indebted to me, as of today, $___________ for the
            rent and use of the premises noted above. Per your lease agreement, you have been assessed a $__________ late
            fee charge at $_________ per day. I demand payment of rent in full or possession of the premises within three
            (3) days (excluding Saturday, Sunday, and legal holidays) from the date of delivery of this notice.</p>
        <p>Please submit the total amount due to this address:</p>
        Company<br> Addr
        <br> City, State, Zip<br><br>
        <p>Failure to pay the total amount noted on the above late rent notice may result in further actions being taken, but
            not limited to eviction.</p>
        <br>
        <p>Sincerely,</p>
        <p>_________________</p>
        <p>Landlord</p>
        <br> I hereby certify that a copy of the following Notice was served upon the above named tenant(s) at the above
        address on the following date: (month/day/year) ________________________________ by the following means:
        <br> ( ) Certified Mail - Return Receipt Requested
        <br> ( ) Hand delivered to tenant
        <br> ( ) Leaving a copy at the premises<br>
        <br>
        <br> ___________________________
        <br> Signature
    </div>
</div>
@endsection