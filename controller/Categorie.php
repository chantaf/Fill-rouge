<?php
session_start();
require_once "./model/CategorieModel.php";
class Categorie
{


	function index()
	{
		// session_start();
		if (!empty($_SESSION['email']) && ($_SESSION['role']=="admin")  ) {
			$objet = new CategorieModel();
			$result = $objet->getAll();
			$mns=["","active","","","","",""];
			require_once "./view/sidedashbord.php";
			require_once __DIR__ . '/../view/categorie/index.php';
		} else {
			echo "<script>
					alert('acces pour admin');
					window.location.href='http://localhost/fill-rouge/login/';
					</script>";
			// header("location: http://localhost/fill-rouge/login/");
		}
	}


	function create()
	{
		if (isset($_POST['ajouter'])) {
			$categorier = new CategorieModel();
			$result=$categorier->getAll();
			$ver=0;
			foreach($result as $res){
				if($res["categorie"]==$_POST['categorie']){
					$ver=1;
				}
			
		}
		if($ver==1){
			echo "<script>
					alert('Categorie deja existe');
					window.location.href='http://localhost/fill-rouge/categorie/';
					</script>";
		}else{
			$categorier ->insert($_POST['categorie']);
			echo "<script>
					alert('Ajoute avec succes');
					window.location.href='http://localhost/fill-rouge/categorie/';
					</script>";
		}
		
		}
	}

	function update()
	{

		if (isset($_POST['submit'])) {
			$categorie = new CategorieModel();
			$cat = $categorie->update($_POST['id'],$_POST['categorie']);
			echo "<script>
					alert('Modifie avec succes');
					window.location.href='http://localhost/fill-rouge/categorie/';
					</script>";
			
		}
	}

	function delete()
	{
		if (isset($_POST['supprimer'])) {

			$categorie = new CategorieModel();
			$categorie->Delete($_POST['id']);
			echo "<script>
			alert('Supprimer avec succes');
			window.location.href='http://localhost/fill-rouge/categorie/';
			</script>";
		}
	}
}
