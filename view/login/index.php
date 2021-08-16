

    <link rel="stylesheet" type="text/css" href="<?= LIEN ?>view/css/stylelogin.css">
  

    <div class="container-fluid">
		<div class="container">
			 <h2 class="text-center mt-4 mb-3" id="title">Form Login et Register</h2>
		
			<div class="row">
            <div class="col-md-5">
 				<form action="<?= LIEN ?>login/authentification" method="post">
						<fieldset>							
							<p class="text-uppercase">LOGIN: </p>	
 								
							<div class="form-group mb-3">
								<input type="text" name="email" id="username" class="form-control input-lg" placeholder="Email ou Tel" required>
							</div>
							<div class="form-group mb-3">
								<input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" required>
							</div>
							<div>
								<input type="submit" name="submit" class="btn btn-md text-white mt-2 mb-3 btnloginenvoyer" value="Login">
							</div>
								 
 						</fieldset>
				</form>	
				</div>
				
				
				<div class="col-md-2">
					<!-------null------>
				</div>
				<div class="col-md-5">
 					<form role="form" method="post" action="<?= LIEN ?>login/create">
						<fieldset>							
							<p class="text-uppercase pull-center"> REGISTER:</p>	
 							<div class="form-group mb-3">
								<input type="name" name="nom" id="username" class="form-control input-lg" placeholder="Nom" required>
							</div>
                            <div class="form-group mb-3">
								<input type="text" name="prenom" id="username" class="form-control input-lg" placeholder="Prenom" required>
							</div>

							<div class="form-group mb-3">
								<input type="text" name="email" id="email" class="form-control input-lg" placeholder="Email ou Tel" required>
							</div>
							<div class="form-group mb-3">
								<input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" minlength="7" maxlength="15"  required>
							</div>
								<div class="form-group mb-3">
								<input type="password" name="confpassword" id="password2" class="form-control input-lg" placeholder="Confirm Password" minlength="7" maxlength="15" required>
							</div>
						
 							<div>
 									  <input type="submit" name="submit" class="btn btn-lg  mt-2 text-white btnloginenvoyer" value="Register">
 							</div>
						</fieldset>
					</form>
				</div>
			
			</div>
		</div>
	
	</div>




       
    <script src="<?= LIEN ?>view/js/panier.js"></script>
    

</body>
</html>