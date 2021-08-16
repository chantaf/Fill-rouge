<link rel="stylesheet" type="text/css" href="<?= LIEN ?>view/css/styletabledashbord.css">
   
   <div class="d-grid"> 
   
   
   <?php 
                  if($_SESSION['role']=="livreur"){
                    $livreur="hidden";
				
                  }else{
                    $livreur="";
					
                  }
                  ?>

<div>

<div <?=$livreur?> class="content">
    <div class="navCount">
                
            <div  class="order commande" >
            <i class="fas fa-shopping-basket"></i>
            <div class="info">
            <?php
                foreach($result6 as $res){?>
                    <span class="numbers"><?php echo $res['nombrecommande']?></span>
            <?php    
                } ?>
                
                <span class="commande1">COMMANDE</span>
            </div>
            </div>

            <div   class="order contact" >
            <i class="fas fa-envelope-open-text"></i>
            <div class="info">
            <?php
                foreach($result5 as $res){?>
                    <span class="numbers"><?php echo $res['nombrecontact']?></span>
            <?php    
                } ?>
                <span class="contact1">CONTACT</span>
            </div>
            </div>
            
    </div>
  


</div>
    
</div>

<!-- table -->
<div>



<div <?=$livreur?> class="d-grid">

<div class="container totaltable">
	
		<div class="table-wrapper">
			<div class="table-title" style="background-color: #5A718D;" >
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
                    


					</tr>
				</thead>
				<tbody>
		<?php 
                foreach($selectcommande as $res){?>
					<tr>
						
						<td><?=$res['id'] ?></td>
						<td><?=$res['nom'] ?></td>
						<td><?=$res['prenom'] ?></td>
						<td><?=$res['adress'] ?></td>
						<td><?=$res['tel'] ?></td>
						<td><?=$res['etat'] ?></td>
                        <td><?=$res['prixtotal'] ?></td>
					
					</tr>
	
					<?php  
            } ?>
				</tbody>
			</table>
	
		</div>

</div>


 <!-- *************************  -->


 <div class="container totaltable">
	
		<div class="table-wrapper" >
			<div class="table-title" style="background-color: #2F5564;">
				<div class="row">
					<div class="col-sm-6" >
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
					


					</tr>
				</thead>
				<tbody>
      
		<?php 
                foreach($selectcontact as $res){?>
			
					<tr>
						
						<td><?=$res['id'] ?></td>
						<td><?=$res['nom'] ?></td>
						<td><?=$res['email'] ?></td>
						<td ><?=$res['tel'] ?></td>
						<td><?=$res['sujet'] ?></td>
						<td class="col-9 text-left"><?=$res['message'] ?></td>
                        <td><?=$res['etat'] ?></td>
					
					</tr>
	
					<?php  
            } ?>
				</tbody>
			</table>
	
		</div>

</div>

</div>

</div>
</div>
   
</body>
</html>



