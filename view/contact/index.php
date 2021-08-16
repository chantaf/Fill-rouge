

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?= LIEN ?>view/css/styletabledashbord.css">


<div class="container totaltable">
	
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2><b>CONTACT</b></h2>
					</div>
				
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
                    <th>Etat</th>
					<th>Actions</th>


					</tr>
				</thead>
				<tbody>
       
		<?php 
                foreach($result as $res){?>
			<form action="<?= LIEN ?>contact/update" method="POST">
					<tr>
						
						<td><?=$res['id'] ?></td>
						<td><?=$res['nom'] ?></td>
						<td><?=$res['email'] ?></td>
						<td ><?=$res['tel'] ?></td>
						<td><?=$res['sujet'] ?></td>
						<td class="col-9 text-left"><?=$res['message'] ?></td>
                        <td><?=$res['etat'] ?></td>
						<td class="d-flex">
	
						<input type="hidden" name="id" value="<?=$res['id'] ?>">
						<button class="btnrepende" type="submit" name="update"></a><i class="fas fa-reply-all"></i></button>
						<a href="mailto: <?=$res['email'] ?>"  ><i class="fas fa-inbox" titre="repense"></i>
							
						 	   
							   <a href="#deleteModal" class="delete" data-toggle="modal"onclick="supprimer('<?=$res['id'] ?>')"><i class="fas fa-trash" title="Supprimer"></i></a>
		
						</td>
					</tr>
			</form>
					<?php  
            } ?>
				</tbody>
			</table>
	
		</div>

</div>

<!-- supprimer Modal HTML -->
<div id="popupsupprimer"> 

</div>


<script src="<?= LIEN ?>view/js/popupcontact.js"></script>
</body>
</html>