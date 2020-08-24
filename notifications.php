<?php
    // SDK de Mercado Pago
    require __DIR__ .  '/vendor/autoload.php';
    
    MercadoPago\SDK::setAccessToken("APP_USR-6317427424180639-042414-47e969706991d3a442922b0702a0da44-469485398");

//    {
 //       "id": 12345,
//        "live_mode": true,
//        "type": "payment",
//        "date_created": "2015-03-25T10:04:58.396-04:00",
//        "application_id": 123123123,
//        "user_id": 44444,
//        "version": 1,
//        "api_version": "v1",
 //       "action": "payment.created",
 //       "data": {
 //           "id": "999999999"
 //       }
 //   }


//echo "<script>window.open($_POST["id"], '_blank'); window.focus();</script>";
echo $_POST["id"];
?>
<p><?php echo $_POST["id"];?></p>