

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="http://localhost/fill-rouge/view/css/styletabledashbord.css">


<div class="container totaltable ">
	
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
                    <th>Tel</th>
                    <th>Adress</th>
                    <th>Etat</th>
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
                        <td><?=$res['tel'] ?></td>
						<td><?=$res['adress'] ?></td>
						<td><?=$res['etat'] ?></td>
						<td class="d-flex">
							<a href="#editModal" class="edit" data-toggle="modal" onclick="modifier('<?=$res['idcmd'] ?>','<?=$res['etat'] ?>')"><i class="fas fa-edit" title="Modifier"></i></a>
							</form>

                            <form action="http://localhost/fill-rouge/detail/" method="post">
                            <input type="text" name="idcmd" value="<?php echo $res['idcmd'] ?>" hidden>
                            <input type="text" name="idclient" value="<?php echo $res['idclient'] ?>" hidden>
                            <button class="btndetail"><i class="fas fa-info-circle" title="Detail"></i></button>
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
<div id="popupmodifier">

</div>




<script src="http://localhost/fill-rouge/view/js/popupdetailcommandelivreur.js"></script>
</body>
</html>