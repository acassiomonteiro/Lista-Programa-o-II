<?php

  $num1 = @$_REQUEST["num1"];

  if (isset($_GET['num1'],$_GET['num2'],$_GET['num3'],$_GET['calcular'],)){
    echo 'O Resultado é:<br />';
     }

  if($num1 % 2 == 0){
    echo " é divisivel por 2" ;
    
  }
  else { 
    echo " não é divisivel por 2 ";
  }

  if($num1 % 5 == 0){
    echo " é divisivel por 5" ;

  }
  else { 
    echo " não é divisivel por 5 ";
  }

  if($num1 % 7 == 0){
    echo " é divisivel por 7" ;

  }
  else { 
    echo " não é divisivel por 7 ";
  }

?>

