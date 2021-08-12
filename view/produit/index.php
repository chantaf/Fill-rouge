
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="http://localhost/fill-rouge/view/css/styletabledashbord.css">


<div class="container totaltable">
	
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>NOS <b>PRODUITS</b></h2>
					</div>
					<div class="col-sm-6">
						
						<a href="#addModal" class="btn btn-success" data-toggle="modal"><i class="fas fa-plus-circle"></i>  AJOUTER PRODUIT</a>
										
					</div>
				</div>
			</div>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						
						<th>Id</th>
						<th>Titre</th>
						<th>Prix</th>
						<th>Description</th>
						<th>Image</th>
						<th>Categorie</th>
						<th>Actions</th>


					</tr>
				</thead>
				<tbody>
		<?php 
                foreach($result as $res){?>
					<tr>
						
						<td><?=$res['id'] ?></td>
						<td><?=$res['titre'] ?></td>
						<td><?=$res['prix'] ?></td>
						<td class="col-9 text-left"><?=$res['description'] ?></td>
						<td><img src="../<?=$res['image'] ?>"  width="80"  alt="*"></td>
						<td><?=$res['categorie'] ?></td>
						<td class="d-flex">
							<a href="#editModal" class="edit" data-toggle="modal" onclick="modifier('<?=$res['id'] ?>','<?=$res['titre'] ?>','<?=$res['prix'] ?>','<?=$res['description'] ?>','../<?=$res['image'] ?>','<?=$res['categorie'] ?>')"><i class="fas fa-edit" title="Modifier"></i></a>
							
						 	   
							   <a href="#deleteModal" class="delete" data-toggle="modal"onclick="supprimer('<?=$res['id'] ?>')"><i class="fas fa-trash" title="Supprimer"></i></a>
							</form>
						</td>
					</tr>
	
					<?php  
            } ?>
				</tbody>
			</table>
	
		</div>

</div>
<!-- Edit Modal HTML -->
<div id="addModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
		<form action="http://localhost/fill-rouge/produit/create" method ="POST" enctype="multipart/form-data">
				<div class="modal-header">						
					<h4 class="modal-title">Ajouter Produit</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>Titre</label>
						<input type="text" name="titre" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Prix</label>
						<input type="text" name="prix" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Description</label>
						<textarea class="form-control" name="description" required></textarea>
					</div>
					<div class="form-group">
						<label>Image</label>
						<input type="file" name="image" class="form-control"  required>
					</div>	
					
					<div class="form-group">
						<label>Categorie</label>

						<select name="categorie" class="form-control" id="ex3">
                                    <option value="">Choisir Categorie</option>
                                        <?php
                            
                                     foreach($resultcat as $re){?>

                                            <option value=<?php  echo $re['id'] ?>><?php echo $re['categorie'] ?></option>

                                        <?php } ?>
                                </select>
					</div>	
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Annuler">
					<input type="submit" class="btn btn-success" name="ajouter" value="Ajouter">
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Edit Modal HTML -->
<div id="popupmodifier">

</div>

<div id="popupsupprimer"> 

</div>

<script>
	function modifier(id,titre,prix,description,image,categorie){
    
    var divpopup=document.getElementById("popupmodifier");
    divpopup.innerHTML=`<div id="editModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
        <form action="http://localhost/fill-rouge/produit/update" method="POST" enctype="multipart/form-data">
				<div class="modal-header">						
					<h4 class="modal-title">Modifier Produit</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>Titre</label>
						<input type="text" name="titre" value="`+titre+`" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Prix</label>
						<input type="text" name="prix" value="`+prix+`" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Description</label>
						<textarea class="form-control"  name="description" required>`+description+`</textarea>
					</div>
					<div class="form-group">
						<label>Image</label>
                        <label><img src="`+image+`"  width="80"  alt="*"></label>
						<input type="file" name="image" class="form-control"  >
					</div>	
					
					<div class="form-group">
					<label>Categorie</label>
                        <select class="form-control" name="categorie">
						
                        <?php foreach($resultcat as $re){?>

                                            <option value='<?=$re['id'] ?>'
                                            <?php if($res['categorie']==$re['categorie']){echo "selected='selected'";} ?>
                                            ><?=$re['categorie'] ?></option>

                                        <?php } ?>

							
                 </select> 
					</div>	
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Annuler">
					<input type="text" name="id" value="`+id+`" hidden>
					<input type="submit" name="submit" class="btn btn-info"  value="Enregistrer">
				</div>
			</form>
		</div>
	</div>
</div>`;

}
</script>
<script src="http://localhost/fill-rouge/view/js/popupproduit.js"></script>
</body>
</html>