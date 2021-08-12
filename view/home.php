<link rel="stylesheet" href="http://localhost/fill-rouge/view/css/styleproduituser.css">
  <!-- debut slide -->

  <div id="carouselExampleControls" class="carousel slide slide1" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="http://localhost/fill-rouge/view/img-slide/m1.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="http://localhost/fill-rouge/view/img-slide/m2.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="http://localhost/fill-rouge/view/img-slide/m3.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="http://localhost/fill-rouge/view/img-slide/m4.png" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- fin slide -->

  <!--debut information  -->
  <section class="toutservice">
    <div class="container">
      <div class="row">

        <div class="col-sm divinfo">
          <div class="service-info">
            <div class="iconinfo"><i class="fa fa-bus"></i></div>
            <div class="titreinfo">
              <h3 class="titreinfo1"><a href=""> Livraison en moins de 24h</a></h3>
              <p class="desc">Grand Casablanca (sauf le dimanche)</p>
            </div>
          </div>
        </div>

        <div class="col-sm divinfo">
          <div class="service-info">
            <div class="iconinfo"><i class="fa fa-volume-control-phone"></i></div>
            <div class="titreinfo">
              <h3 class="titreinfo1"><a href=""> Service client</a></h3>
              <p class="desc">0662 704705 / 0664 403400</p>
            </div>
          </div>
        </div>

        <div class="col-sm divinfo">
          <div class="service-info">
            <div class="iconinfo"><i class="fa fa-refresh"></i> </div>
            <div class="titreinfo">
              <h3 class="titreinfo1"><a href="">Support</a></h3>
              <p class="desc">Disponible 24-heures</p>
            </div>
          </div>
        </div>

        <div class="col-sm divinfo">
          <div class="service-info">
            <div class="iconinfo"><i class="fa fa-gift"></i> </div>
            <div class="titreinfo">
              <h3 class="titreinfo1"><a href=""> Moins cher</a></h3>
              <p class="desc">Economisez sur vos courses</p>
            </div>
          </div>
        </div>
      </div>
    </div>


  </section>

  <!-- fin information -->
  <!-- debut legume -->
  <h2 class="titre">LÉGUMES DU JOUR</h2>
  <div class="page">
    <!--For Row containing all card-->
    <div class="row">
    <?php
         $cmp=0;
   foreach($resultlegumes as $res){?>
        <!--Card -->
        <div class="col-sm d-flex justify-content-center  cardslegume a<?php  echo $res['id'] ?>">
        <span id="id_produit<?=$cmp?>" hidden><?php  echo $res['id'] ?></span>
            <div class="card card-cascade card-ecommerce wider shadow mb-5 ">
                <!--Card image-->
                <div class="view view-cascade  text-center"> <img class="card-img-top" src="<?= LIEN ?><?php echo $res['image'] ?>" alt="" onmouseover="iconvoir(<?=$res['id'] ?>)" onmouseout="iconvoir1(<?=$res['id'] ?>)"> <a>
                <div class="iconvoir" id="iconvoir<?php  echo $res['id'] ?>"><img class="card-img-top" src="<?= LIEN ?><?php echo $res['image'] ?>" alt="" onclick="popup('<?= LIEN ?><?php echo $res['image'] ?>','<?php echo $res['prix'] ?>','<?php echo $res['titre']?>','<?php echo $res['description']?>','<?=$cmp?>')" data-toggle="modal" data-target="#myModal"><i class="fas fa-eye iconv"></i></div>
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
  <!-- fin legume -->

  <!-- debut HERBES -->
  <h2 class="titre">HERBES</h2>

  <div class="page">
    <!--For Row containing all card-->
    <div class="row">
    <?php
         $cmp=0;
   foreach($resultherbes as $res){?>
        <!--Card -->
        <div class="col-sm d-flex justify-content-center  cardslegume a<?php  echo $res['id'] ?>">
        <span id="id_produit<?=$cmp?>" hidden><?php  echo $res['id'] ?></span>
            <div class="card card-cascade card-ecommerce wider shadow mb-5 ">
                <!--Card image-->
                <div class="view view-cascade  text-center"> <img class="card-img-top" src="<?= LIEN ?><?php echo $res['image'] ?>" alt="" onmouseover="iconvoir(<?=$res['id'] ?>)" onmouseout="iconvoir1(<?=$res['id'] ?>)"> <a>
                <div class="iconvoir" id="iconvoir<?php  echo $res['id'] ?>"><img class="card-img-top" src="<?= LIEN ?><?php echo $res['image'] ?>" alt="" onclick="popup('<?= LIEN ?><?php echo $res['image'] ?>','<?php echo $res['prix'] ?>','<?php echo $res['titre']?>','<?php echo $res['description']?>','<?=$cmp?>')" data-toggle="modal" data-target="#myModal"><i class="fas fa-eye iconv"></i></div>
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
  
  <!-- fin HERBES -->

  <!-- debut fruit -->
  <h2 class="titre">FRUITS FRAIS</h2>
  <div class="page">
    <!--For Row containing all card-->
    <div class="row">
    <?php
         $cmp=0;
   foreach($resultfruits as $res){?>
        <!--Card -->
        <div class="col-sm d-flex justify-content-center  cardslegume a<?php  echo $res['id'] ?>">
        <span id="id_produit<?=$cmp?>" hidden><?php  echo $res['id'] ?></span>
            <div class="card card-cascade card-ecommerce wider shadow mb-5 ">
                <!--Card image-->
                <div class="view view-cascade  text-center"> <img class="card-img-top" src="<?= LIEN ?><?php echo $res['image'] ?>" alt="" onmouseover="iconvoir(<?=$res['id'] ?>)" onmouseout="iconvoir1(<?=$res['id'] ?>)"> <a>
                <div class="iconvoir" id="iconvoir<?php  echo $res['id'] ?>"><img class="card-img-top" src="<?= LIEN ?><?php echo $res['image'] ?>" alt="" onclick="popup('<?= LIEN ?><?php echo $res['image'] ?>','<?php echo $res['prix'] ?>','<?php echo $res['titre']?>','<?php echo $res['description']?>','<?=$cmp?>')" data-toggle="modal" data-target="#myModal"><i class="fas fa-eye iconv"></i></div>
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
  <!-- fin fruit -->

  <!-- debut panier -->
  <h2 class="titre">NOS PANIERS</h2>
  <div class="page">
    <!--For Row containing all card-->
    <div class="row">
    <?php
         $cmp=0;
   foreach($resultpanier as $res){?>
        <!--Card -->
        <div class="col-sm d-flex justify-content-center   cardslegume a<?php  echo $res['id'] ?>">
        <span id="id_produit<?=$cmp?>" hidden><?php  echo $res['id'] ?></span>
            <div class="card card-cascade card-ecommerce wider shadow mb-5 ">
                <!--Card image-->
                <div class="view view-cascade  text-center"> <img class="card-img-top" src="<?= LIEN ?><?php echo $res['image'] ?>" alt="" onmouseover="iconvoir(<?=$res['id'] ?>)" onmouseout="iconvoir1(<?=$res['id'] ?>)"> <a>
                <div class="iconvoir" id="iconvoir<?php  echo $res['id'] ?>"><img class="card-img-top" src="<?= LIEN ?><?php echo $res['image'] ?>" alt="" onclick="popup('<?= LIEN ?><?php echo $res['image'] ?>','<?php echo $res['prix'] ?>','<?php echo $res['titre']?>','<?php echo $res['description']?>','<?=$cmp?>')" data-toggle="modal" data-target="#myModal"><i class="fas fa-eye iconv"></i></div>
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
  </div>
  <!-- fin panier -->

<!-- debut popup"> -->

<div id="popup">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</div>
  <!-- fin popup -->


  <script src="http://localhost/fill-rouge/view/js/panier.js"></script>
  <script src="http://localhost/fill-rouge/view/js/popupproduituser.js"></script>
  <script>



</script> 
</body>
</html>