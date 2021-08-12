<?php
session_start();
class Apropos
{


	function index()
	{
		// $mnse=["","","","","","active","","",""];
		$mnse=["produits"=>"","autre"=>"","accueil"=>"","apropos"=>"active","contact"=>"",""];
		require_once "./view/header.php";
		require_once __DIR__ . '/../view/apropos/index.php';
		require_once "./view/footer.php";
	}
	

	
}
