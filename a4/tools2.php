<?php
  session_start();
    $array1 = array('cust','movie');
    $array2= array('id','day','hour', 'name','email', 'mobile', 'card', 'expiry');
    foreach ($array1 as $value1){
      foreach($array as $value2){
        if(empty($_SESSION[$value1][$value2])){
            header ("Location : index.php");
        }
      }
    }
    if(empty( $_SESSION['total']['hidden'])){
      header ("Location : index.php");
    }
    switch ($_SESSION['movie']['id']){
      case 'ACT':
        $movietitle = 'Avengers:End Game';
        $theater = 1;
        break;
      case 'RMC':
        $movietitle = 'Top End Wedding';
        $theater = 2;
        break;
      case 'ANM':
        $movietitle = 'Dumbo';
        $theater = 3;
        break;
      case 'AHF':
        $movietitle = 'The Happy Price';
        $theater = 4;
        break;
    }
    switch ($_SESSION['movie']['day']) {
      case 'MON':
      case 'TUE':
      case 'WED':
          $priceSTA = 14.00;
          $priceSTP = 12.50;
          $priceSTC = 11.00;
          $priceFCA = 24.00;
          $priceFCP = 22.50;
          $priceFCC = 21.00;
          break;
      case 'SAT':
      case 'SUN':
          $priceSTA = 19.80;
          $priceSTP = 17.50;
          $priceSTC = 15.30;
          $priceFCA = 30.00;
          $priceFCP = 27.00;
          $priceFCC = 24.00;
          break;
      case 'FRI':
      case 'THU':
          switch ($_SESSION['movie']['hour']) {
              case 'T12':
                $priceSTA = 14.00;
                $priceSTP = 12.50;
                $priceSTC = 11.00;
                $priceFCA = 24.00;
                $priceFCP = 22.50;
                $priceFCC = 21.00;
                  break;
              default:
                $priceSTA = 19.80;
                $priceSTP = 17.50;
                $priceSTC = 15.30;
                $priceFCA = 30.00;
                $priceFCP = 27.00;
                $priceFCC = 24.00;
                  break;
          }
  }
    
  // Put your PHP functions and modules here
  ?>


