<!DOCTYPE html>
<?php
 
 if(!isset($mnse))
 {

  $mnse=["produits"=>"","autre"=>"","accueil"=>"","apropos"=>"","contact"=>""];
 }
?>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script src="https://kit.fontawesome.com/85b095fcc2.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="http://localhost/fill-rouge/view/css/styleheader.css">


<title>Site</title>

   
</head>
<body>
<!-- ********** debut navnab***************** -->
<nav class="navbar navbar-expand-md navbar-light  main-menu" style="box-shadow:none">
  <div class="container">

    <button type="button" id="sidebarCollapse" class="btn btn-link d-block d-md-none">
      <i class="fas fa-bars btncoloricon"></i>
    </button>

    <a class="navbar-brand" href="">
      <img src="http://localhost/fill-rouge/view/img-logo/logo.png" class="imglogo" alt="#" >
    </a>

    <ul class="navbar-nav ml-auto d-block d-md-none">
      <li class="nav-item">
        <a class="btn btn-link btncoloricon" href="http://localhost/fill-rouge/panier/"><i class="fas fa-shopping-cart btncoloricon"></i> <span class="badge badge-danger" id="countarticle">0</span></a>
      </li>
    </ul>

  <div class="collapse navbar-collapse">
   
        <span class="form-inline d-flex  my-2 my-lg-0 mx-auto"> 
        <input class="form-control cardselect" type="search" placeholder="Search for products..." aria-label="Search" onclick="cherchevide()">
        <button class="btn  btnrecherche my-2 my-sm-0" onclick="filterage()" ><i class="fas fa-search"></i></button>
        </span>

      <ul class="navbar-nav">

        <li class="nav-item">
          <a class="btn btn-link btncoloricon" href="http://localhost/fill-rouge/panier/"><i class="fas fa-shopping-cart btncoloricon"></i> <span class="badge badge-danger" id="countarticle1">0</span></a>
        </li>

        <li class="nav-item ml-md-3">
          <a class="btn  btnlogin" href="http://localhost/fill-rouge/login/"><i class="fas fa-user-circle"></i> Log In / Register</a>
        </li>
      </ul>
    </div>

  </div>
</nav>

<nav class="navbar navbar-expand-md navbar-light  sub-menu">
  <div class="container">
  <div class="collapse navbar-collapse" id="navbar">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item <?=$mnse["accueil"]?>">
          <a class="nav-link" href="<?= LIEN ?>">ACCUEIL<span class="sr-only"></span></a>
        </li>


        <li class="nav-item dropdown <?=$mnse["produits"]?>">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              NOS PRODUITS
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="<?= LIEN ?>produit/categorie/Legumes">LÉGUMES</a></li>
              <li><a class="dropdown-item" href="<?= LIEN ?>produit/categorie/Herbes">FRUITS</a></li>
              <li><a class="dropdown-item" href="<?= LIEN ?>produit/categorie/Fruits">HERBES</a></li>
            </ul>

          </li>


          <li class="nav-item dropdown <?=$mnse["autre"]?>">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              PANIERS
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="<?= LIEN ?>produit/categorie/Panier-Legume">Panier LÉGUMES</a></li>
              <li><a class="dropdown-item" href="<?= LIEN ?>produit/categorie/Panier-Fruit">Panier FRUITS</a></li>
              <li><a class="dropdown-item" href="<?= LIEN ?>produit/categorie/Panier-Mix">Panier MIX</a></li>
            </ul>

          </li>
         <li class="nav-item <?=$mnse["apropos"]?>">
          <a class="nav-link" href="<?= LIEN ?>apropos">APROPOS</a>
        </li>
        <li class="nav-item <?=$mnse["contact"]?>">
          <a class="nav-link" href="<?= LIEN ?>contactuser/">CONTACT</a>
        </li>


        <li class="nav-item d-grid text-center">
          <i class="fas fa-user-circle iconcompte"></i> 
          <a class="compte" href="http://localhost/fill-rouge/profiluser/">
          
            
            <?php 
            
            if(empty($_SESSION['nom']) && empty($_SESSION['prenom'])){
              echo "Mon Compte";
            }else{
                echo ($_SESSION['nom']." ".$_SESSION['prenom']);
            }
             
            ?>
             
           
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- zone rechrech res -->
<div class="search-bar d-block d-md-none ">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 navrecherchresp">
        <span class="form-inline d-flex  my-2 my-lg-0 mx-auto"> 
          <input class="form-control cardselect" type="search" placeholder="Search for products..."  aria-label="Search" onclick="cherchevide()">
          <button class="btn  btnrecherche" onclick="filterage()"><i class="fas fa-search"></i></button>
        </span>
      </div>
    </div>
  </div>
</div>

<!-- Sidebar -->
<nav id="sidebar">
  <div class="sidebar-header">
    <div class="container">
       <div class="d-grid" style="color:black;text-align:center;">
          <i class="fas fa-user-circle iconcompteres" ></i> 
          <a class="compte" style="color:black;" href="">
            
          <?php 
            
            if(empty($_SESSION['nom']) && empty($_SESSION['prenom'])){
              echo "Mon Compte";
            }else{
                echo ($_SESSION['nom']." ".$_SESSION['prenom']);
            }
             
            ?>
          </a>
        </div>
      <div class="row align-items-center">
        <div class="col-10 pl-0">
          <a class="btn btn-primary" href="http://localhost/fill-rouge/login/"><i class="bx bxs-user-circle mr-1"></i> Log In</a>
        </div>

        <div class="col-2 text-left">
          <button type="button" id="sidebarCollapseX" class="btn btn-link">
          <i class="fas fa-times"></i>
          </button>
        </div>
      </div>
    </div>
  </div>

  <ul class="list-unstyled components links">
    <li class="<?=$mnse["accueil"]?>">
      <a href="<?= LIEN ?>"  class="iconres"><i class="fas fa-home"></i>  ACCUEIL</a>
    </li>


    
        <li class="nav-item dropdown <?=$mnse["produits"]?>" style="text-decoration: none;">
            <a class="dropdown-toggle" href="#" id="navbarDropdown" class="iconres" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">

              <i class="fab fa-product-hunt"></i>  NOS PRODUITS
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a href="<?= LIEN ?>produit/categorie/Legumes" class="iconres"><i class="fas fa-carrot"></i> LÉGUMES</a></li>
              <li><a href="<?= LIEN ?>produit/categorie/Fruits" class="iconres"><i class="fas fa-apple-alt"></i> FRUITS</a></li>
              <li><a href="<?= LIEN ?>produit/categorie/Herbes" class="iconres"><i class="fas fa-seedling"></i> HERBES</a></li>
            </ul>
          </li>
 

        <li class="nav-item dropdown <?=$mnse["autre"]?>" style="text-decoration: none;">
            <a class="dropdown-toggle" href="#" id="navbarDropdown" class="iconres" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">

            <i class="fa fa-shopping-basket"></i>  PANIERS
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="<?= LIEN ?>produit/categorie/Panier-Legume"><i class="fa fa-shopping-basket"></i> Panier LÉGUMES</a></li>
              <li><a class="dropdown-item" href="<?= LIEN ?>produit/categorie/Panier-Fruit"><i class="fa fa-shopping-basket"></i> Panier FRUITS</a></li>
              <li><a class="dropdown-item" href="<?= LIEN ?>produit/categorie/Panier-Mix"><i class="fa fa-shopping-basket"></i> Panier MIX</a></li>
            </ul>
          </li>
    <li class="<?=$mnse["apropos"]?>">
      <a href="<?= LIEN ?>apropos" class="iconres"><i class="fas fa-info-circle"></i>  A PROPOS</a>
    </li>
      <li class="<?=$mnse["contact"]?>">
      <a href="<?= LIEN ?>contactuser/" class="iconres"><i class="fas fa-file-signature"></i>  CONTACT</a>
    </li>
  </ul>


</nav>

<!-- ***********************fin navbar******************** -->
   <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
   <script src="http://localhost/fill-rouge/view/js/header.js"></script>
 

</script>

