<?php

require_once "./model/HomeModel.php";
class Home
{
	
	function index()
	{

		session_start();
	
		$mnse=["produits"=>"","autre"=>"","accueil"=>"active","apropos"=>"","contact"=>""];
		    require_once "./view/header.php";
			$objet= new HomeModel();
			$resultlegumes=$objet-> getlegume();

			$objet= new HomeModel();
			$resultfruits=$objet-> getfruit();

			$objet= new HomeModel();
			$resultherbes=$objet-> getherbes();

			$objet= new HomeModel();
			$resultpanier=$objet-> getpanier();

			require __DIR__."/../view/home.php";
			require_once "./view/footer.php";
		
	}
}