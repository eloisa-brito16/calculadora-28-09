<?php
  require_once "soma.php";
  require_once "substracao.php";
  require_once "multiplicacao.php";
  require_once "divisao.php";

  function msg(){
    echo "Boa Tarde!";
  }
  class conta extends soma(){
    public $resultado;
  }