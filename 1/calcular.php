<?php

  $num1 = @$_REQUEST["num1"];
  $num2 = @$_REQUEST["num2"];
  $num3 = @$_REQUEST["num3"];
  $soma = $num1 + $num2 + $num3;

  if (isset($_GET['num1'],$_GET['num2'],$_GET['num3'],$_GET['calcular'],)){
    echo 'O Resultado é:<br />';
     }

      if ($soma > 13){
          $total = $soma + 8;
      } else{
          $total = $soma - 2;
      }
      print $total;

?>

