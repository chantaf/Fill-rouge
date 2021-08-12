


function modifier(id,categorie){
    
    var divpopup=document.getElementById("popupmodifier");
    divpopup.innerHTML=`<div id="editModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
        <form action="http://localhost/fill-rouge/categorie/update" method="post">
				<div class="modal-header">						
					<h4 class="modal-title">Modifier Categorie</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>Categorie</label>
						<input type="text" name="categorie" value="`+categorie+`" class="form-control" required>
					</div>
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Annuler">
					<input type="text" name="id" value="`+id+`" hidden>
					<input type="submit" name="submit" class="btn btn-info" value="Enregistrer">
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
		   <form action="http://localhost/fill-rouge/categorie/delete" method="post">
           <input type="text" name="id" value="`+id+`" hidden>
				<div class="modal-header">						
					<h4 class="modal-title">Supprimer Categorie</h4>
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