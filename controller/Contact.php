<?php
session_start();
require_once "./model/ContactModel.php";
class Contact
{
	
	
	function index()
	{
		
		if (!empty($_SESSION['email']) && ($_SESSION['role']=="admin")) {
			$objet= new ContactModel();
		$result=$objet-> getAll();
		$mns=["","","","","active","",""];
		require_once "./view/sidedashbord.php";
		require_once __DIR__.'/../view/contact/index.php';
		} else {
			
			echo "<script>
					alert('acces pour admin');
					window.location.href='".LIEN."login/';
					</script>";
		}
			
	}




	function delete()
	{
		if(isset($_POST['supprimer'])){

			$legume=new ContactModel();
			$legume->Delete($_POST['id']);
			header("location:".LIEN."contact/");


		}
	}




	function update()
		{

				if (isset($_POST['update'])) {
					$contact= new ContactModel();
					$contact->update($_POST['id']);
			header("location:".LIEN."contact/");	
					
					
		}
	

	
	}


}




