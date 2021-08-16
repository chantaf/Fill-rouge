<!doctype html>
<?php
 
 if(!isset($mns))
 {
  $mns=["","","","","","",""];
 }
?>
<html lang="en">
  <head>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://kit.fontawesome.com/85b095fcc2.js" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">




<!--  CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!--  theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?= LIEN ?>view/css/styledashbord.css">
    <title>Dashbord</title>
  </head>


  <body class="home">
    <div id="sidebar" class="container-fluid display-table">
        <div class="row display-table-row">
            <div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation">
               
                <div class="navi dashbordtotal">
                <ul class="dashbordul">
                  <?php 
                  if($_SESSION['role']=="livreur"){
                    $livreur="hidden";
                    $admin="";
                  }else{
                    $livreur="";
                    $admin="hidden";
                  }
                  ?>
                        <li <?=$livreur?> class="<?=$mns[0]?>"><a href="<?= LIEN ?>dashbord/"><i class="fa fa-home"  aria-hidden="true"></i><span class="hidden-xs hidden-sm">ACCUEIL</span></a></li>
                        <li <?=$livreur?> class="<?=$mns[1]?>"><a href="<?= LIEN ?>categorie/"><i class="fas fa-carrot"  aria-hidden="true"></i><span class="hidden-xs hidden-sm">CATEGORIE</span></a></li>
                        <li <?=$livreur?> class="<?=$mns[2]?>"><a href="<?= LIEN ?>produit/"><i class="fas fa-seedling" aria-hidden="true"></i><span class="hidden-xs hidden-sm">PRODUIT</span></a></li>
                        <li  <?=$livreur?> class="<?=$mns[3]?>"><a href="<?= LIEN ?>commande/"><i class="fas fa-shopping-cart" aria-hidden="true"></i><span class="hidden-xs hidden-sm">COMMANED</span></a></li>
                        <li  <?=$admin?> class="active"><a href="<?= LIEN ?>commandelivreur/"><i class="fas fa-shopping-cart" aria-hidden="true"></i><span class="hidden-xs hidden-sm">COMMANED</span></a></li>
                        <li <?=$livreur?> class="<?=$mns[4]?>"><a href="<?= LIEN ?>contact/"><i class="fas fa-file-signature"></i><span class="hidden-xs hidden-sm">CONTACT</span></a></li>
                        <li <?=$livreur?> class="<?=$mns[5]?>"><a href="<?= LIEN ?>compteadmin/"><i class="fas fa-user-alt" aria-hidden="true"></i><span class="hidden-xs hidden-sm">COMPTE</span></a></li>
                        <form action="<?= LIEN ?>login/logout" method="post">
                        <li class="<?=$mns[5]?>"><a href="" class="hidden-xs hidden-sm"><i class="fas fa-sign-out-alt" aria-hidden="true"></i><button id="buttonout" type="submit" name="logout" >LOGOUT</button></a></li>
                        </form>
                        
                    </ul>
                </div>
            </div>
            
    
           </div>
        </div>
       

      