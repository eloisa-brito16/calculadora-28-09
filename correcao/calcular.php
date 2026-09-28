<?php
include "funcao.php";

$operacao = $_POST["operacao"];
switch($operacao) {
    case '+':
      $total = soma($_POST["numero1"],$_POST["numero2"]);
      echo "<br>Total:".$total;
      break;
      case '-':
      $total = sub($_POST["numero1"],$_POST["numero2"]);
      echo "<br>Total:".$total;
      break;
      case '*':
      $total = $_POST["numero1"]*$_POST["numero2"];
      echo "<br>Total:".$total;
      break;
      case '/':
        if($_POST["numero2"]==0){
        }else{
          $total = $_POST;
          }
      $total = $_POST["numero1"]/$_POST["numero2"];
      echo "<br>Total:".$total;
      break;
      
      default:
      # code. . .
      break;
}