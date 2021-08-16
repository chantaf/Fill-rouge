<?php
session_start();
require_once "./model/ProduitModel.php";
class Produit
{


	function index()
	{
		if (!empty($_SESSION['email']) && ($_SESSION['role']=="admin")) {
			$objet = new ProduitModel();
			$result = $objet->getAll();
			$resultcat=$objet->getAllcat();
			$mns=["","","active","","","",""];
			require_once "./view/sidedashbord.php";
			require_once __DIR__ . '/../view/produit/index.php';
		} else {
			echo "<script>
					alert('acces pour admin');
					window.location.href='".LIEN."login/';
					</script>";
			
		}
	}


	function create()
	{
		if (isset($_POST['ajouter'])) {
			$produit = new ProduitModel();
			$result=$produit->getAll();
			$ver=0;
			foreach($result as $res){
				if($res["titre"]==$_POST['titre']){
					$ver=1;
				}
			
		}
		if($ver==1){
			echo "<script>
					alert('produit deja existe');
					window.location.href='".LIEN."produit/';
					</script>";
		}else{
			$targetDir = "uploads/";
			$fileName = basename($_FILES["image"]["name"]);
			$targetFilePath = $targetDir . time() . $fileName;

			move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath);
			
			$produit->insert($_POST['titre'], $_POST['prix'], $_POST['description'], $targetFilePath,$_POST['categorie']);
			echo "<script>
					alert('Ajouter avec succes');
					window.location.href='".LIEN."produit/';
					</script>";
		}

			
		}
	}

	function update()
	{

		if (isset($_POST['submit'])) {

			$produit = new ProduitModel();
			$targetFilePath="";
			
			if (!empty($_FILES["image"]["tmp_name"])) {
				$targetDir = "uploads/";
				$fileName = basename($_FILES["image"]["name"]);
				$targetFilePath = $targetDir . time() . $fileName;

				move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath);
			
			}
			if($_POST['categorie']==0){
				$leg = $produit->update1($_POST['id'], $_POST['titre'], $_POST['prix'], $_POST['description'], $targetFilePath);
			}else{
				$leg = $produit->update($_POST['id'], $_POST['titre'], $_POST['prix'], $_POST['description'], $targetFilePath,$_POST['categorie']);
			}
			
		
			echo "<script>
					alert('Modifer avec succes');
					window.location.href='".LIEN."produit/';
					</script>";
		}
	}

	function delete()
	{
		if (isset($_POST['supprimer'])) {
			$produit = new ProduitModel();
			$produit->Delete($_POST['id']);
			echo "<script>
					alert('supprimer avec succes');
					window.location.href='".LIEN."produit/';
					</script>";
			
		}
	}



	function categorie($categorie){
		
		$objet = new ProduitModel();

		$mnse=["produits"=>"","autre"=>"","accueil"=>"","apropos"=>"","contact"=>""];
		
		$mnse[$categorie]="active";
	
		if($categorie!="Fruits" && $categorie!="Legumes" && $categorie!="Herbes"){
			$mnse["autre"]="active";
		}else{
			$mnse["produits"]="active";
		}
		$categories = $objet->getcategorie($categorie);
		require_once "./view/header.php";
		require_once __DIR__ . '/../view/produituser/index.php';
		require_once "./view/footer.php";

	}


	function chercher(){
		
		$objet = new ProduitModel();
		$produit = $objet->getproduit($_POST['categorie']);
		

	}
}
