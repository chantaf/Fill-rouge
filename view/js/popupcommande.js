

function supprimer(id){
    
    var divpopup=document.getElementById("popupsupprimer");
    divpopup.innerHTML=`<div id="deleteModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
		   <form action="http://localhost/fill-rouge/commande/delete" method="post">
           <input type="text" name="id" value="`+id+`" hidden>
				<div class="modal-header">						
					<h4 class="modal-title">Supprimer Contact</h4>
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