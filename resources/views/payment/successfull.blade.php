<!DOCTYPE html>
<html lang="en">
@include("layouts.head")
<body>
    <div class="main">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                    
                        
                   
                    @if($payments["pp_ResponseCode"]== "000")
                    <div class="card-header">Payment Successful</div>
                    @else
                    <div class="card-header">Payment Unsuccessfull</div>
                    @endif
                        <div class="card-body">
                            <h1>{{$payments["pp_ResponseMessage"]}}</h1>
                            <h4>Payment Information</h4>
                            <p>Transaction Id :{{$payments["pp_TxnRefNo"]}} </p>
                  
                   
                        </div>
                   
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
