<?php
session_start();
require_once "./model/CommandeuserModel.php";
class Commandeuser
{
	
	
	function index()
	{
		// session_start();
		if (!empty($_SESSION['email'])){
			require_once "./view/header.php";
			require_once __DIR__.'/../view/commandeuser/index.php';
			require_once "./view/footer.php";
		}else{
			// header("location: http://localhost/fill-rouge/login/");
			echo "<script>
					alert('authentifie');
					window.location.href='http://localhost/fill-rouge/login/';
					</script>";
		}
		
			
	}


	function create()
	{
		if(isset($_POST['commander'])){
			    $commander=new CommandeuserModel();
				$formtel="/[0]{1}[6-7]{1}[0-9]{8}/";
				if(!preg_match($formtel,$_POST['tel'])){
					echo "
					<script>
					alert('tel incorecte cree sous form 0600000000');
					window.location.href='http://localhost/fill-rouge/commandeuser/';
					</script>";
				}else{
					$idComd=$commander->insert($_POST['adress'],$_POST['tel'],$_POST['prixtotal']);
				}
                
				
				
				for($i=0;$i<$_POST['products'];$i++){
					$commander->insertlignecmd($_POST['idproduct'.$i],$_POST['qteproductqte'.$i],$idComd);
				}
				if($commander==true){
					echo "
					<script>
					alert('commande avec seccus');
					localStorage.setItem('panier',JSON.stringify([]));
					window.location.href='http://localhost/fill-rouge/';
					</script>";
				}else{
					echo "<script>
					alert('commande refuser');
					window.location.href='http://localhost/fill-rouge/commandeuser';
					</script>";
				}
				// echo '<script>alert("Welcome to Geeks for Geeks")</script>'; 
                // header("location:http://localhost/fill-rouge/");
				
				


           
        }


	}


	

	// function delete()
	// {
	// 	if(isset($_POST['supprimer'])){

	// 		$legume=new ContactModel();
	// 		$legume->Delete($_POST['id']);
	// 		header("location:http://localhost/fill-rouge/contact/");


	// 	}
	// }

}


