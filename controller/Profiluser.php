<?php
session_start();
require_once "./model/ProfiluserModel.php";
class Profiluser
{


	function index()
	{
		
		if (!empty($_SESSION['email'])) {
			$objet = new ProfiluserModel();
			$result = $objet->getone($_SESSION['email']);
			$resultcmd = $objet->getcommande($_SESSION['email']);
			$resultdetail=$objet->getcommande1($_SESSION['email']);
			require_once "./view/header.php";
		    require_once __DIR__.'/../view/profiluser/index.php';
		    require_once "./view/footer.php";
			
		} else {
			
			header("location:".LIEN."login/");
			
		}
	}


	
	function update()
	{

		if (isset($_POST['update'])) {

			$profil = new ProfiluserModel();
			$id=$_SESSION['email'];
			$leg = $profil->update($id,$_POST['nom'],$_POST['prenom'],$_POST['email']);
            echo "<script>
					alert('modifier avec seccus');
					window.location.href='".LIEN."profiluser/';
					</script>";
		
		}
	}


	function updatepassword()
	{

		if (isset($_POST['updatepassword'])) {

			$objet = new ProfiluserModel();
			$result = $objet->getpassword($_SESSION['email'],md5($_POST['ancienpassword']));
			if($result==true){
			$profil = new ProfiluserModel();
			$id=$_SESSION['email'];
			$leg = $profil->updatepassword($id,md5($_POST['password']));
            echo "<script>
					alert('modifier avec seccus');
					window.location.href='".LIEN."profiluser/';
					</script>";
			}else{
				echo "<script>
				alert('ancien password incorecte');
				window.location.href='".LIEN."profiluser/';
				</script>";
			}
		
		}
	}

	function delete()
	{
		
		if (isset($_POST['supprimer'])) {
			
			$profil = new ProfiluserModel();
			$id=$_SESSION['email'];
			$profil->Delete($id);
            echo "<script>
					alert('supprimer avec seccus');
					window.location.href='".LIEN."';
					</script>";
				}
		
   }
	

	function deletecommande()
	{
		
		if (isset($_POST['supprimer'])) {
			
			$profil = new ProfiluserModel();
			$id=$_POST['idcmd'];
			$profil->Deletecommande($id);
            echo "<script>
					alert('supprimer avec seccus');
					window.location.href='".LIEN."profiluser/';
					</script>";
				}
			
		}
	


	
}
