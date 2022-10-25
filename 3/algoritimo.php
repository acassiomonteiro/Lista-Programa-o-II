<?php
  //$nome = @$_REQUEST["idade"];
  //$sexo = @$_REQUEST["sexo"];
  //$ano = @$_REQUEST ["idade"];
  //$idade = @$_REQUEST ["idade"];

  $nome  = isset($_GET["nome"])  ?$_GET["nome"]:  "X";
  $sexo  = isset($_GET["sexo"])?$_GET["tsexo"]:"X";
  $ano = isset($_GET["ano"])  ?$_GET["ano"]:    0;
  $idade = date("Y") - $ano;
  
  if ($sexo == "femenino" and $idade < 25) { //mulher é o valor de value em html
      echo "Olá $nome <br/> você foi ACEITA";
  }
  else  {
      echo "Olá $nome <br/> você NÃO foi ACEITO";
  }
     
?>

