<?php
session_start();
$_SESSION['idEA1'] = 77;
$_SESSION['userPerfil'] = 1;


function __autoload($class)
{
    include_once dirname(__FILE__) . "../../wo/Services/erplight/{$class}.php";
}