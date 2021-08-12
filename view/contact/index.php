

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="http://localhost/fill-rouge/view/css/styletabledashbord.css">


<div class="container totaltable">
	
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2><b>CONTACT</b></h2>
					</div>
					<!-- <div class="col-sm-6">
						
						<a href="#addModal" class="btn btn-success" data-toggle="modal"><i class="fas fa-plus-circle"></i>  AJOUTER PRODUIT</a>
										
					</div> -->
				</div>
			</div>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						
                    <th>id</th>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Tel</th>
                    <th>Sujet</th>
                    <th>Message</th>
                    <th>Repense</th>
					<th>Actions</th>


					</tr>
				</thead>
				<tbody>
		<?php 
                foreach($result as $res){?>
					<tr>
						
						<td><?=$res['id'] ?></td>
						<td><?=$res['nom'] ?></td>
						<td><?=$res['email'] ?></td>
						<td ><?=$res['tel'] ?></td>
						<td><?=$res['sujet'] ?></td>
						<td class="col-9 text-left"><?=$res['message'] ?></td>
                        <td><?=$res['repense'] ?></td>
						<td class="d-flex">
							<a href="#editModal" class="edit" data-toggle="modal" ><i class="fas fa-inbox" titre="repense"></i></a>
							
						 	   
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

<!-- supprimer Modal HTML -->
<div id="popupsupprimer"> 

</div>


<script src="http://localhost/fill-rouge/view/js/popupcontact.js"></script>
</body>
</html>