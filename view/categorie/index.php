
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?= LIEN ?>view/css/styletabledashbord.css">


<div class="container totaltable">
	
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>NOS <b>CATEGORIE</b></h2>
					</div>
					<div class="col-sm-6">
						
						<a href="#addModal" class="btn btn-success" data-toggle="modal"><i class="fas fa-plus-circle"></i>  AJOUTER CATEGORIE</a>
										
					</div>
				</div>
			</div>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						
                    <th>Id</th>
                    <th>Categorie</th>
                    <th>Actions</th>


					</tr>
				</thead>
				<tbody>
		<?php 
                foreach($result as $res){?>
					<tr>
						
						<td><?=$res['id'] ?></td>
						<td><?=$res['categorie'] ?></td>
						
						<td class="d-flex">
							<a href="#editModal" class="edit" data-toggle="modal" onclick="modifier('<?=$res['id'] ?>','<?=$res['categorie'] ?>')"><i class="fas fa-edit" title="Modifier"></i></a>
							
						 	   
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
		<form action="<?= LIEN ?>categorie/create" method ="POST" enctype="multipart/form-data">
				<div class="modal-header">						
					<h4 class="modal-title">Ajouter Categorie</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>Categorie</label>
						<input type="text" name="categorie" class="form-control" required>
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


<script src="<?= LIEN ?>view/js/popupcategorie.js"></script>
</body>
</html>


