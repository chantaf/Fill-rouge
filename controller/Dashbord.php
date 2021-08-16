<?php
session_start();
require_once "./model/DashbordModel.php";
class Dashbord
{
	
	
	function index()
	{
		        
				if(!empty($_SESSION['email']) && ($_SESSION['role']=="admin" || $_SESSION['role']=="livreur")){
					$objet= new DashbordModel();
					$result5=$objet-> getcountcontact();
					$result6=$objet-> getcountcommande();
					$selectcontact=$objet-> getallcontact();
					$selectcommande=$objet-> getallcommande();
					$mns=["active","","","","","",""];
			        require_once "./view/sidedashbord.php";
					require_once __DIR__.'/../view/dashbord/index.php';
				}else{
					echo "<script>
					alert('acces pour admin ou livreur');
					window.location.href='".LIEN."login/';
					</script>";
					
				}
	}


   

}


