
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="http://localhost/fill-rouge/view/css/styletabledashbord.css">


<?php 
        if($_SESSION["role"]=="livreur"){
            $livreur="none";
        }else{
            $livreur="block";
        }
?>	
<div class="d-grid">
<div class="container totaltable" style="display:<?=$livreur?>;">
	
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2><b>INFOS CLIENT</b></h2>
					</div>
					
				</div>
			</div>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Tel</th>
                    <th>Adress</th>
                    <th>Etat</th>
                    <th>Prixtotal</th>
                    <th>Actions</th>
						


					</tr>
				</thead>
				<tbody>
                <?php 
                foreach($resultinfos as $res){?>	
					<tr>
			
						
						<td><?=$res['nom'] ?></td>
						<td><?=$res['prenom'] ?></td>
						<td><?=$res['tel'] ?></td>
                        <td><?=$res['adress'] ?></td>
						<td><?=$res['etat'] ?></td>
						<td><?=$res['prixtotal'] ?></td>
						<td class="d-flex">
							<a href="#editModal" class="edit" data-toggle="modal" onclick="modifier('<?=$res['idcmd'] ?>','<?=$res['etat'] ?>')"><i class="fas fa-edit" title="Modifier"></i></a>
							</form>
						</td>
      
					</tr>
                    <?php  
            } ?>
			
				</tbody>
			</table>
	
		</div>

</div>


<div class="container totaltable">
	
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2><b>DETAIL COMMANDE</b></h2>
					</div>
					
				</div>
			</div>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						
                        <th>Produit</th>
                        <th>Quantite</th>
                        <th>Description</th>
						


					</tr>
				</thead>
				<tbody>
		<?php 
                foreach($result as $res){?>
					<tr>
						
						
						<td><?=$res['titre'] ?></td>
						<td><?=$res['quantite'] ?></td>
						<td><?=$res['description'] ?></td>
						
					</tr>
                    <?php  
            } ?>
				</tbody>
			</table>
	
		</div>

</div>

</div>


<!-- Edit Modal HTML -->
<div id="popupmodifier">

</div>


<script>
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
						<label>Etat Actual</label>
                        <label class="form-control">`+etat+`</label>
						
					</div>

                    <?php 
                    if($_SESSION['role']=="livreur"){
                        $livreur="hidden";
                        $livreur1="none";
                        $admin="";
                        $admin1="block";
                    }else{
                        $livreur="";
                        $livreur1="block";
                        $admin="hidden";
                        $admin1="none";
                    }
                  ?> 
				   <div class="form-group">
						<label>Etat</label>
                    <select  class="form-control" name="etat"  ">
                         <option value="">changer etat</option>

                            <option  style="display: <?=$livreur1?>;" value='confirmer'>confirmer</option>
                            <option style="display: <?=$livreur1?>;" value='annuler'>annuler</option>
                            <option style="display: <?=$admin1?>;" value='livrer'>livrer</option>
                            <option style="display: <?=$admin1?>;" value='valider'>valider</option>

                    </select> 
					</div>

					<div class="form-group">
						<label>Livreur</label>
             <select class="form-control" <?=$livreur?> name="livreur" >
                         <option value="">choisir levreur</option>
                        <?php foreach($resultlivreur as $re){?>

                               <option value='<?=$re['id']?>'><?=$re['nom'] ?>  <?=$re['prenom'] ?></option>
                 
                          <?php } ?>
             

            </select> 
			</div>
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
</script>

</body>
</html>