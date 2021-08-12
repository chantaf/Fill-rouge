<?php
session_start();
require_once "./model/DashbordModel.php";
class Dashbord
{
	
	
	function index()
	{
		        // session_start();
				if(!empty($_SESSION['email']) && ($_SESSION['role']=="admin" || $_SESSION['role']=="livreur")){
					$objet= new DashbordModel();
					$result5=$objet-> getcountcontact();
					$result6=$objet-> getcountcommande();
					$selectcontact=$objet-> getallcontact();
					$selectcommande=$objet-> getallcommande();
					$mns=["active","","","","","",""];
			        require_once "./view/sidedashbord.php";
					// $result6=$objet-> getcountcommande();
					require_once __DIR__.'/../view/dashbord/index.php';
				}else{
					echo "<script>
					alert('acces pour admin ou livreur');
					window.location.href='http://localhost/fill-rouge/login/';
					</script>";
					// header("location: http://localhost/fill-rouge/login/");
				}
	}


   

}


