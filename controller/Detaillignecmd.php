<?php
session_start();
require_once "./model/DetaillignecmdModel.php";
class Detaillignecmd
{
	
	
	function index()
	{
		
		if (empty($_SESSION['email'])){
			require_once "./view/header.php";
			require_once __DIR__.'/../view/login/index.php';
			require_once "./view/footer.php";
		}else{
			if(isset($_POST["idcommande"])){
				require_once "./view/header.php";
            $objet= new DetaillignecmdModel();
			$resultdetail=$objet-> getall($_SESSION["email"],$_POST["idcommande"]);
            $resultprixtotal=$objet->getprixtotal($_POST["idcommande"]);
			require_once __DIR__.'/../view/detaillignecmd/index.php';
			require_once "./view/footer.php";
			}else{
				echo "test";
				header('Location:'.LIEN.'profiluser/');	
			}
			
		}
		
			
	}


    
	function delete()
	{
		if (isset($_POST['supprimer'])) {
			$produit = new DetaillignecmdModel();

		if($_POST['etat']!="commander"){
			echo "<script>
			alert('la supprission est refuser ,car la commande est confirmer');
			window.location.href='".LIEN."profiluser/';
			</script>";
		}else{
			$produit->Delete($_POST['idcmd']);
			echo "<script>
					alert('supprimer avec succes');
					window.location.href='".LIEN."profiluser/';
					</script>";
		}
			
			
		}
	}


	

}


