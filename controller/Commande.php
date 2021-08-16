<?php
session_start();
require_once "./model/CommandeModel.php";
class Commande{

	function index()
	{
		
		
		if (!empty($_SESSION['email']) && ($_SESSION['role']=="admin" ||$_SESSION['role']=="livreur")) {
			$objet = new CommandeModel();
			$result=$objet-> getAll();
			
			require_once "./view/sidedashbord.php";
			require_once __DIR__ . '/../view/commande/index.php';
		} else {
			echo "<script>
					alert('acces pour admin');
					window.location.href='".LIEN."login/';
					</script>";
			
		}
	}
		
		
	
	






	function update()
	{

		if (isset($_POST['update'])) {

			$compte = new CommandeModel();
			$etat = $compte->update($_POST['idcmd'],$_POST['etat']);
				echo "<script>
				alert('Modifier avec seccus')";
			
			if($etat!="annuler" && $_SESSION["role"]=="admin")
			    {
					if(empty($_POST['livreur'])){
						$etat = $compte->update($_POST['idcmd'],"commander");
						echo "<script>
					alert('selectionner votre livreur');
					window.location.href='".LIEN."commande/';
					</script>";
					}
					$compte->insertlivrer($_POST['idcmd'],$_POST['livreur']);
				}
			
			}
			if($_SESSION['role']=="livreur"){
				header("location:".LIEN."commandelivreur/");
			}else{
				header("location:".LIEN."commande/");
			}

		
		}
	


	function delete()
	{
		if (isset($_POST['supprimer'])) {
			
			$profil = new COmmandeModel();
			$profil->Delete($_POST['id']);
           
			echo "<script>
			alert('Supprimer avec succes');
			window.location.href='".LIEN."commande/';
			</script>";
		}
	}
	

}

