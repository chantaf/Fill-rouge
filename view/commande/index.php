

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="http://localhost/fill-rouge/view/css/styletabledashbord.css">


<div class="container totaltable">
	
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2><b>COMMANDE</b></h2>
					</div>
				</div>
			</div>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						
                    <th>Idcmd</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Adress</th>
                    <th>Tel</th>
                    <th>Etat</th>
                    <th>Prixtotal</th>
                    <th>Actions</th>


					</tr>
				</thead>
				<tbody>
		<?php 
                foreach($result as $res){?>
					<tr>
						
						<td><?=$res['idcmd'] ?></td>
						<td><?=$res['nom'] ?></td>
						<td><?=$res['prenom'] ?></td>
						<td><?=$res['adress'] ?></td>
						<td><?=$res['tel'] ?></td>
						<td><?=$res['etat'] ?></td>
                        <td><?=$res['prixtotal'] ?></td>
						<td class="d-flex">
                        <form action="http://localhost/fill-rouge/detail/" method="post">
                            <input type="text" name="idcmd" value="<?= $res['idcmd'] ?>" hidden>
                            <input type="text" name="idclient" value="<?=$res['idclient'] ?>" hidden>
                            <button class="btndetail"><i class="fas fa-info-circle" title="Detail"></i></button>
							
						</form>
						 	   
							   <a href="#deleteModal" class="delete" data-toggle="modal"onclick="supprimer('<?=$res['idcmd'] ?>')"><i class="fas fa-trash" title="Supprimer"></i></a>
							</form>
						</td>
					</tr>
	
					<?php  
            } ?>
				</tbody>
			</table>
	
		</div>

</div>
<!-- Supprimer Modal HTML -->


<div id="popupsupprimer"> 

</div>


<script src="http://localhost/fill-rouge/view/js/popupcommande.js"></script>
</body>
</html>