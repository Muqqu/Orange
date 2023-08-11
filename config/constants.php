<?php
return [
'easypay' => [

//Post back url
'POST_BACK_URL1'=> 'http://127.0.0.1:8000/checkout-confirm',
'POST_BACK_URL2'=> 'http://127.0.0.1:8000/paymentStatus',
//Live
'TRANSACTION_POST_URL1'=> 'https://easypay.easypaisa.com.pk/easypay/Index.jsf', 
'TRANSACTION_POST_URL2' => 'https://easypay.easypaisa.com.pk/easypay/Confirm.jsf'
//Sandbox
//'TRANSACTION_POST_URL1' => 'https://easypaystg.easypaisa.com.pk/easypay/Index.jsf', //'TRANSACTION_POST_URL2' => 'https://easypaystg.easypaisa.com.pk/easypay/Confirm.jsf'
]
];