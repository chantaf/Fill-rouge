<?php
session_start();
require_once "./model/ContactuserModel.php";
class Contactuser
{
	
	
	function index()
	{
		
		$mnse=["produits"=>"","autre"=>"","accueil"=>"","apropos"=>"","contact"=>"active"];
		require_once "./view/header.php";
		require_once __DIR__.'/../view/contactuser/index.php';
		require_once "./view/footer.php";
		
			
	}


	function create()
	{
		if(isset($_POST['contact'])){
			$contact=new ContactuserModel();

				$formtel="/[0-9]{10}/";
				if(!preg_match($formtel,$_POST['tel'])){
					echo "<script>
					alert('tel incorecte cree sous form 0600000000');
					window.location.href='".LIEN."contactuser/';
					</script>";
				}else{
					$contact->insert($_POST['nom'],$_POST['tel'],$_POST['email'],$_POST['sujet'],$_POST['message']);
					echo "<script>
					alert('Message envoyer');
					window.location.href='".LIEN."contactuser/';
					</script>";
					
				}
               
           
        }
	}


	

}


