@php
    $easypaisa_environment = config('easypaisa.environment');

@endphp

<form name="redirect-to-payment-gateway" method="POST" action="{{Config::get('constants.easypay.TRANSACTION_POST_URL1') }}">
   @foreach($data as $key => $value)
        <input type="hidden" name="{{ $key }}" value="{{ $value }}">
    @endforeach
</form>
@include("layouts.footer");