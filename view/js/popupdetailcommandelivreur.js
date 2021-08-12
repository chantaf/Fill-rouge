
function modifier(id,etat){
    
    var divpopup=document.getElementById("popupmodifier");
    divpopup.innerHTML=`<div id="editModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
        <form action="http://localhost/fill-rouge/commande/update" method="post">
				<div class="modal-header">						
					<h4 class="modal-title">Modifier Etat Commande</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>Etat</label>
                        <label class="form-control">`+etat+`</label>
						
					</div>

                  <select name="etat" class="form-control" >
                  <option value="">changer etat</option>
                  
                          <option value='livrer'>livrer</option>
                          <option value='valider'>valider</option>
                  
                  </select> 
               
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Annuler">
					<input type="text" name="idcmd" value="`+id+`" hidden>
					<input type="submit" class="btn btn-info" name="update"  value="Enregistrer">
				</div>
			</form>
		</div>
	</div>
</div>`;

}


