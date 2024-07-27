<?php

   $cookie_name= "user";
   $cookie_value= "34";

   //   setcookie(name, value, expire, path or ("/"), domain, httponly);
   setcookie($cookie_name,$cookie_value, time()+(86400),"/");
   ?>

   <!DOCTYPE html>
   <html lang="en">
   <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   </head>
   <body>
    <?php
    if(isset($_COOKIE[$cookie_name])){
        echo "successfully set cookie";
    }else{
        echo "not set cookie";
    }
    ?>
   </body>
   </html>

