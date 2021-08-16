
 <div class="container-fluid">
		<div class="container">
			 <h2 class="text-center mt-5 mb-5" id="title">COMMANDER</h2>
			<div class="row d-flex justify-content-center"  style="height: 275px;">
            <div class="col-md-5 text-center">
 				<form action="<?= LIEN ?>commandeuser/create" method="post">
						<fieldset>							
						
 								
							<div class="form-group mt-4 mb-3">
								<input type="text" name="tel"  class="form-control input-lg" placeholder="Tel" required>
							</div>
							<div class="form-group mb-3">
								<input type="text" name="adress"  class="form-control input-lg" placeholder="Adress livraison" required>
							</div>
							<div>
								<input type="submit" name="commander" class="btn btn-md btn-primary text-white mt-2 " value="Commander">
							</div>
								 
 						</fieldset>

             <div id="cmdvalider"></div>	
				</form>	
				</div>
				
			
			</div>
		</div>
	
	</div>


  </body>
  
<script src="<?= LIEN ?>view/js/panier.js"></script>
<script>
setInput();
</script>
</html>
