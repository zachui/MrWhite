<?php 
	require_once '../functions.php';

	if(!$_GET['id']){
		return;
	}

	$id=$_GET['id'];

	white_fetch_excute("delete from personal_users where id ='{$id}'; ");

	header('Location:/MrWhite/admin/customers.php');