


function modifier(id,nom,prenom,email,password,role){
    
    var divpopup=document.getElementById("popupmodifier");
    divpopup.innerHTML=`<div id="editModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
        <form action="http://localhost/fill-rouge/compteadmin/update" method="POST">
				<div class="modal-header">						
					<h4 class="modal-title">Modifier Produit</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>Nom</label>
						<input type="text" name="nom" value="`+nom+`" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Prenom</label>
						<input type="text" name="prenom" value="`+prenom+`" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="text" name="email" value="`+email+`" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Password</label>
						<textarea class="form-control"  name="password" required>`+password+`</textarea>
					</div>

                    <div class="form-group">
						<label>Role</label>
						<textarea class="form-control"  name="role" required>`+role+`</textarea>
					</div>
						
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Annuler">
					<input type="text" name="id" value="`+id+`" hidden>
					<input type="submit" name="update" class="btn btn-info"  value="Enregistrer">
				</div>
			</form>
		</div>
	</div>
</div>`;

}


function supprimer(id){
    
    var divpopup=document.getElementById("popupsupprimer");
    divpopup.innerHTML=`<div id="deleteModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
		   <form action="http://localhost/fill-rouge/compteadmin/delete" method="post">
           <input type="text" name="id" value="`+id+`" hidden>
				<div class="modal-header">						
					<h4 class="modal-title">Supprimer Produit</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<p>voulez vous supprimer cette ligne ?</p>
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Annuler">
					
					<input type="submit" class="btn btn-danger" name="supprimer" value="Supprimer">
				</div>
			</form>
		</div>
	</div>
</div>`;

}