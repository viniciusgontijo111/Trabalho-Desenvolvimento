<?php require_once "includes/Class.class.php";
if(isset($_POST['valida_login'])){
	$sessao = new sessao;
	$sessao->valida_login($_POST['usuario'],md5($_POST['senha']));
}