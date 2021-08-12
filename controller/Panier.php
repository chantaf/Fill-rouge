<?php
session_start();
require_once "./model/PanierModel.php";
class Panier
{
	
	
	function index()
	{
					
		require_once "./view/header.php";
		require_once __DIR__.'/../view/panier/index.php';
		require_once "./view/footer.php";		
				
	}


}


