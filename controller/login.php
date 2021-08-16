<?php
session_start();
require_once "./model/LoginModel.php";
class Login{

	function index()
	{
		
		require_once "./view/header.php";
		require_once __DIR__.'/../view/login/index.php';
		require_once "./view/footer.php";
		

	}



	function create(){
		if(isset($_POST['submit'])){

			$ver=0;
			$sign=new LoginModel();
			$result=$sign->getAll();
			foreach($result as $res){
					if($res["email"]==$_POST['email']){
						$ver=1;
					}
				
			}
			$formemail="/[-0-9a-zA-Z.+_]+@[-0-9a-zA-Z.+_]+.[a-zA-Z]{2,4}/";
			$formtel="/[0]{1}[6-7]{1}[0-9]{8}/";
			if(!preg_match($formemail,$_POST['email']) &&!preg_match($formtel,$_POST['email']) ){
				echo "<script>
				alert('email ou tel incorecte cree sous form mail@email.com ou bien 0600000000');
				window.location.href='".LIEN."login/';
				</script>";
			}
			else if($ver==1){
				echo "<script>
				alert('compte deja exeste');
				window.location.href='".LIEN."login/';
				</script>";
				
			}else if($_POST['password']!=$_POST['confpassword'])
			 {
				echo "<script>
					alert('confirme  password incorecte');
					window.location.href='".LIEN."login/';
					</script>";
			}else{
				$sign->save($_POST['nom'],$_POST['prenom'],$_POST['email'],md5($_POST['password']));
				echo "<script>
					alert('Ajouter avec succes');
					window.location.href='".LIEN."login/';
					</script>";
			}
			
		}
	}



	function authentification(){
		if(isset($_POST['submit'])){
			$ver=0;
			$verpass=0;
			$sign=new LoginModel();
			$result=$sign->getAll();
			foreach($result as $res){
				if($res["email"]==$_POST['email']){
					$ver=1;
				}
			
		}


		foreach($result as $res){
			if(($res["email"]==$_POST['email']) && $res["password"]!=md5($_POST['password'])){
				$verpass=1;
			}
		
	    }


		if($ver==0){
			echo "<script>
				   alert('login incorecte');
					window.location.href='".LIEN."login/';
					</script>";	
		}else if ($verpass==1){
			echo "<script>
					alert('password incorecte');
					window.location.href='".LIEN."login/';
					</script>";	
		
		}else{
			$log=$sign->auth($_POST['email'],md5($_POST['password']));

			if($log[0]['role']=="user"){
				
				
				$_SESSION['email']=$log[0]['id'];
				$_SESSION['nom']=$log[0]['nom'];
				$_SESSION['prenom']=$log[0]['prenom'];
				
					header("location:".LIEN."");
					
				

			}else if($log[0]['role']=="admin"){
				
				$_SESSION['email']=$log[0]['id'];
				$_SESSION['role']=$log[0]['role'];
				$_SESSION['nom']=$log[0]['nom'];
				$_SESSION['prenom']=$log[0]['prenom'];


					header("location:".LIEN."dashbord/");
				
				
			}else if($log[0]['role']=="livreur"){
				
				$_SESSION['email']=$log[0]['id'];
				$_SESSION['role']=$log[0]['role'];
				$_SESSION['nom']=$log[0]['nom'];
				$_SESSION['prenom']=$log[0]['prenom'];
				header("location:".LIEN."commandelivreur/");
			}
		}
	}
}


		
			
			
		

	function Logout()
	{
		if(isset($_POST['logout'])){
			$sign=new LoginModel();
			$sign->logout();
			header("location:".LIEN."login/");
		}
	}

}

