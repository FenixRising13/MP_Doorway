@extends ('layouts.app')
@section ('content')
<div class="container">
  <ul class="collection">
    <li class="collection-item" onclick="location.href = '#';">Three-Day Notice (Pre-Eviction)</li>
    <li class="collection-item">Change of Address</li>
    <li class="collection-item" onclick="location.href = '/laterent';">Late Rent Notice</li>
    <li class="collection-item">Lease Renewal Notice</li>
  </ul>
</div>
@endsection
