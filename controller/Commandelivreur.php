<?php
session_start();
require_once "./model/CommandelivreurModel.php";
class Commandelivreur{

	function index()
	{
		
		
		if (!empty($_SESSION['email']) && ($_SESSION['role']=="livreur")) {
			$objet = new CommandelivreurModel();
			$result=$objet-> getAll($_SESSION['email']);
			// $result = $objet->getAll();
			// $mns=["","","","","","active",""];
			require_once "./view/sidedashbord.php";
			require_once __DIR__ . '/../view/commandelivreur/index.php';
		} else {
			echo "<script>
					alert('acces pour admin');
					window.location.href='http://localhost/fill-rouge/login/';
					</script>";
			// header("location: http://localhost/fill-rouge/login/");
		}
	}
		
		
	





}

