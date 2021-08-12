<?php
session_start();
require_once "./model/DetailModel.php";
class Detail{

	function index()
	{
		
		
		if (!empty($_SESSION['email']) && ($_SESSION['role']=="admin" || $_SESSION['role']=="livreur")) {
			$objet = new DetailModel();
			$result=$objet-> getAll($_POST['idclient'],$_POST['idcmd']);
			$resultinfos=$objet-> getinfos($_POST['idclient'],$_POST['idcmd']);
			$resultlivreur=$objet-> getlivreur();
			require_once "./view/sidedashbord.php";
			require_once __DIR__ . '/../view/detailcommande/index.php';
		} else {
			echo "<script>
					alert('acces pour admin');
					window.location.href='http://localhost/fill-rouge/login/';
					</script>";
			// header("location: http://localhost/fill-rouge/login/");
		}
	}
		
		
	
	



	

}

