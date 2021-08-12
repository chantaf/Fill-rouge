<?php
session_start();
require_once "./model/LoginModel.php";
class Compteadmin{

	function index()
	{
		
		
		if (!empty($_SESSION['email']) && ($_SESSION['role']=="admin")  ) {
			$objet = new LoginModel();
			$result=$objet-> getAll();
			// $result = $objet->getAll();
			$mns=["","","","","","active",""];
			require_once "./view/sidedashbord.php";
			require_once __DIR__ . '/../view/compteadmin/index.php';
		} else {
			echo "<script>
					alert('acces pour admin');
					window.location.href='http://localhost/fill-rouge/login/';
					</script>";
			// header("location: http://localhost/fill-rouge/login/");
		}
	}
		
		
	
	



	function create(){
		if(isset($_POST['ajouter'])){
			$sign=new LoginModel();
			$result=$sign->getAll();
			$ver=0;
			foreach($result as $res){
					if($res["email"]==$_POST['email']){
						$ver=1;
					}
				
			}
			if($ver==1){
				echo "<script>
				alert('le compte deja existe');
				window.location.href='http://localhost/fill-rouge/compteadmin/';
				</script>";
			}else{
				$sign->saveadmin($_POST['nom'],$_POST['prenom'],$_POST['email'],md5($_POST['password']),$_POST['role']);
			echo "<script>
			alert('Ajouter avec succes');
			window.location.href='http://localhost/fill-rouge/compteadmin/';
			</script>";
			}
			
			
		}
	}



	function update()
	{

		if (isset($_POST['update'])) {

			$compte = new LoginModel();
			$leg = $compte->updateadmin($_POST['id'],$_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['password'],$_POST['role']);
            echo "<script>
				alert('Modifier Avec succes');
				window.location.href='http://localhost/fill-rouge/compteadmin/';
				</script>";
		 
		}
	}


	function delete()
	{
		if (isset($_POST['supprimer'])) {
			
			$profil = new LoginModel();
			$profil->Delete($_POST['id']);
			echo "<script>
			alert('Supprimer avec succes');
			window.location.href='http://localhost/fill-rouge/compteadmin/';
			</script>";
			
		}
	}
	

}

