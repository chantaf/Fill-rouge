
<link rel="stylesheet" href="<?= LIEN ?>view/css/styleproduituser.css">

  <!-- debut legume -->
  <h2 class="titre"><?=strtoupper($categorie)?> DU JOUR</h2>

  <div class="page">
   
    <div class="row ">
    <?php
         $cmp=0;
   foreach($categories as $res){?>
        <!--Card -->
        <div class="col-sm cardslegume a<?php  echo $res['id'] ?> <?php echo $res['titre'] ?>">
        <span id="id_produit<?=$cmp?>" hidden><?php  echo $res['id'] ?></span>
            <div class="card card-cascade card-ecommerce wider shadow mb-5">
                <!--Card image-->
                <div class="view view-cascade  text-center"> <img class="card-img-top" src="<?= LIEN ?><?php echo $res['image'] ?>" alt="" onmouseover="iconvoir(<?=$cmp?>)" onmouseout="iconvoir1(<?=$cmp?>)"> <a>
                    <div class="iconvoir" id="iconvoir<?=$cmp?>"><img class="card-img-top" src="<?= LIEN ?><?php echo $res['image']?>"  alt="" onclick="popup('<?= LIEN ?><?php echo $res['image'] ?>','<?php echo $res['prix'] ?>','<?php echo $res['titre']?>','<?php echo $res['description']?>','<?=$cmp?>')" data-toggle="modal" data-target="#myModal"><i class="fas fa-eye iconv"></i></div>
                <span id="image_produit<?=$cmp?>" hidden><?php  echo $res['image'] ?></span>
                        <div class="mask rgba-white-slight"></div>
                    </a> </div>
                <!--Card Body-->
                <div class="card-body card-body-cascade text-center">
                    <!--Card Title-->
                    <h4 class="card-title" id="titre_produit<?=$cmp?>"><strong><?php echo $res['titre'] ?></strong></h4>
                    <p style="text-decoration: line-through; color: #a5a5a5;"><?= $res['prix']+2 ?> DH <strong>1kg</strong></p>
                    <p class="price" ><?= $res['prix'] ?> DH <strong>1kg</strong></p> <!-- Card Rating-->
                    <span id="prix<?=$cmp?>" name="prix1" hidden><?= $res['prix'] ?></span>

                    
                    <!--Card footer-->
                    <div class="card-footer">
                        <button class="card-footer btnadd text-white" onclick="ajouterpanier(<?=$cmp?>)">Ajouter au panier</button>
                       <!--  <p onclick="">ADD TO CART</p> -->
                    </div>
                </div>
            </div>
        </div>


        
        <?php  $cmp++; } ?>
        
        </div>
</div>







  <!-- debut popup"> -->

<div id="popup">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</div>
  <!-- fin popup -->

  <script src="<?= LIEN ?>view/js/panier.js"></script>
  <script src="<?= LIEN ?>view/js/popupproduituser.js"></script>


  
</body>
</html>