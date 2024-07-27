<?php

// $n=0;
//   try {
//     if($n==0){
//         echo "no error";
//     }else{
//         throw new Exception("Enter the valid No.");
//     }
// }catch(Exception $e){
//     echo $e->getMessage();
//   }



// $n=0;
// try {
//   if($n==0){
//       throw new Exception("Enter the valid No.");
//   }
//   $div=2/$n;
//   echo "$div";
// }catch(Exception $e){
//   echo $e->getMessage();
// }



function div($n){
  try {
    if($n<=0){
        throw new Exception("Enter the valid No.");
    }
    $div=2/$n;
    echo "$div";
  }catch(Exception $e){
    echo $e->getMessage();
  }
}
div(2);
?>