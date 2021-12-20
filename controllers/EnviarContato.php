<?php
session_start();
$_POST["hoje"]=date("d/m/Y H:i:s");

$_SESSION["retorno"]="Mensagem Enviada";

header("Location: /contato.php");