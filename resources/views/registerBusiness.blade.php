@php
$jazzcash_environment = config('jazzcash.environment');
@endphp
<!DOCTYPE html>
<html lang="en">
@include("layouts.head");

<body>
  <div class="main">
    <header class="header d-none">
      <nav class="navbar">
        <div class="container-fluid">
          <a href="" class="navbar-brand"><img src="assets/img/svg/logo.svg" alt="" /></a>
          <div class="d-flex justify-content-end">
            <ul class="social">
              <li class="list-item">
                <a href=""><i class="fab fa-facebook-f"></i></a>
              </li>
              <li class="list-item">
                <a href=""><i class="fab fa-instagram"></i></a>
              </li>
              <li class="list-item">
                <a href=""><i class="fab fa-twitter"></i></a>
              </li>
              <li class="list-item">
                <a href=""><i class="fab fa-discord"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <div class="main-content">
      <section class="register">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-6 p-0 d-none d-lg-flex">
              <div class="register-img"></div>
            </div>
            <div class="col-lg-6">
              <div class="wrapper">
                <form action="{{url('/payment')}}" method="post">
                  @csrf
                  <input type="hidden" name = "amount" value = "200">
                  <h1 class="title">Be the part<br>of <span class="text-primary">Our Family</span></h1>
                  <div class="input-wrapper">
                    <input type="text" class="form-control" placeholder="Name" name="name" >
                  </div>
                  @error('name')
                  <span class="text" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                  <div class="input-wrapper">
                    <input type="email" class="form-control" placeholder="Email" name="email">
                  </div>
                  @error('email')
                  <span class="text" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                  <div class="input-wrapper">
                    <input type="password" class="form-control" placeholder="Password" name="pass">
                  </div>
                  @error('pass')
                  <span class="text" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                 <div id="cardDiv">
                 <div class="input-wrapper">
                    <input type="text" class="form-control" placeholder="Card Number" name="cardno" id="cardNumber" >
                  </div>
                  <div class="input-wrapper">
                    <input type="text" class="form-control" placeholder="Card Name" name="cardname" id= "owner">
                  </div>
                  <div class="row credit-input">
                    <div class="col-md-6">
                      <div class="input-wrapper">
                        <input type="text" id="expirydate" name="expirydate" class="form-control" placeholder="expiry date" maxlength="19">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="input-wrapper">
                        <input type="text" class="form-control" placeholder="cvc" name="cvc">
                      </div>
                    </div>
                  </div>
                 </div>
                  
                  
                  <div id="jazzcashdiv"  style = "display:none">
                  <div class="input-wrapper">
                    <input type="text" class="form-control" placeholder="Jazzcash Phone" name="phone_no">
                  </div>
                  </div>
                  <div id="easypaisaDiv"  style = "display:none">
                  <div class="input-wrapper">
                    <input type="text" class="form-control" placeholder="Easypasia Phone" name="phoneEasypaisa">
                  </div>
                  </div>
                  
                  <div class="input-wrapper form-group radios-wrapper">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="creditCard" id="creditCard" value="creditCard" checked>
                      <label class="form-check-label active" for="creditCard">
                        <img src="assets/img/svg/credit-card-logo.svg" alt="">
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="creditCard" id="jazzCash" value="jazzCash">
                      <label class="form-check-label" for="jazzCash">
                        <img src="assets/img/svg/jazzcash-logo.svg" alt="">
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="creditCard" id="easypaisa" value="easypaisa">
                      <label class="form-check-label" for="easypaisa">
                        <img src="assets/img/svg/easypaisa-logo.svg" alt="">
                      </label>
                    </div>
                  </div>
                  <button class="btn btn-primary w-100 mt-3 mt-lg-5" type="submit">Submit</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>

    {{--<form name="redirect-to-payment-gateway" method="POST" action="{{ config("jazzcash.$jazzcash_environment.endpoint") }}">
    @foreach($data as $key => $value)
    <input type="hidden" name="{{ $key }}" value="{{ $value }}">
    @endforeach
    </form>--}}
    <div class="cursor"></div>
  </div>

  @include("layouts.footer");
  <script src="{{asset('assets/js/jquery.payform.min.js')}}" charset="utf-8"></script>

<script>
  
   $(".radios-wrapper .form-check input").on("change", function () {
    
    $(".radios-wrapper .form-check label").removeClass("active");
    
    if($("#creditCard").prop("checked")){
      $("#easypaisaDiv").css("display", "none");
      $("#cardDiv").css("display", "block");
      $("#jazzcashdiv").css("display", "none");
    }
    if($("#jazzCash").prop("checked") ){
      $("#easypaisaDiv").css("display", "none");
      $("#jazzcashdiv").css("display", "block");
      $("#cardDiv").css("display", "none");
    }
    if($("#easypaisa").prop("checked") ){
      $("#jazzcashdiv").css("display", "none");
      $("#easypaisaDiv").css("display", "block");
      $("#cardDiv").css("display", "none");
    }


    
  });

  var owner = $('#owner'),
    cardNumber = $('#cardNumber'),

    CVV = $("#cvv"),
    mastercard = $("#mastercard"),
    confirmButton = $('#confirm-purchase'),
    visa = $("#visa"),
    amex = $("#amex");
  var cardNumber = $('#cardNumber');
  cardNumber.payform('formatCardNumber');

  
  </script>
 
</body>

</html>