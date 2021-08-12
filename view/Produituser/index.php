
<link rel="stylesheet" href="http://localhost/fill-rouge/view/css/styleproduituser.css">

  <!-- debut legume -->
  <h2 class="titre"><?=strtoupper($categorie)?> DU JOUR</h2>

  <div class="page">
    <!--For Row containing all card-->
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

  <script src="http://localhost/fill-rouge/view/js/panier.js"></script>
  <script src="http://localhost/fill-rouge/view/js/popupproduituser.js"></script>

<script>

// function iconvoir(e){
// 	document.getElementById("iconvoir"+e).style.display="block";
// 	}
	
// 	function iconvoir1(e){
// 	document.getElementById("iconvoir"+e).style.display="none";
// 	}


//     function popup(img,prix,titre,desc,index){
//         var divpopup=document.getElementById("popup");
//         divpopup.innerHTML=`
//          <style >
// .btn1 {
//     margin: .375rem;
//     color: inherit;
//     text-transform: uppercase;
//     word-wrap: break-word;
//     white-space: normal;
//     cursor: pointer;
//     border: 0;
//     border-radius: 1px;
//     -webkit-box-shadow: 0 2px 5px 0 rgba(0,0,0,0.16), 
// 0 2px 10px 0 rgba(0,0,0,0.12);
//     padding: .84rem 2.14rem;
//     font-size: .81rem;
// }


// .modal-dialog .modal-header {
//     background-color: #fb3;
//     border-radius: 1px;
//     color: #fff;
// }

// .modal-footer {
//     -ms-flex-pack: center !important;
//     justify-content: center !important;
// }

// .modal-content {
//     font-weight: 600;
//     border-radius: 1px;
//     box-shadow: 6px 6px 3px #ffc832b0;
// }
// .btn-danger {
//     font-weight: 700;
// }

// .z-depth-1-half {
// height: 200px;
// }
// </style>


//         <div class="container text-center">
//         <div class="modal" id="myModal">
//             <div class="modal-dialog">
//                 <div class="modal-content">
//                     <!-- Modal Header -->
//                     <div class="modal-header">
//                         <h4 class="modal-title">`+titre+`</h4>
//                         <button type="button" class="close" data-dismiss="modal">&times;</button>
//                     </div>
//                     <!-- Modal body -->
//                     <div class="modal-body">
//                         <div class="row">
//                             <div class="col-6 text-center">
//                                 <img src="`+img+`" alt="#" class="img-fluid z-depth-1-half">
//                                 <div style="height: 10px"></div>
//                                 <p style="text-decoration: line-through; color: #a5a5a5;">13 DH KG </p>
//                                 <p class="title mb-0"> `+prix+` DH KG</p>
//                                 <!-- <p class="text-muted " style="font-size: 13px">Web Designer</p> -->
//                             </div>
              
//                             <div class="col-6 text-left">
//                                 <h4 class="modal-title">Description:</h4>
//                                 <p>`+desc+`
//                                 </p>
//                             </div>
//                         </div>
//                     </div>
                
//                     <!-- Modal footer -->
//                     <div class="modal-footer">
//                         <button type="button" class="btn1 btn-danger" data-dismiss="modal">Fermer</button>
//                          <button type="button" class="btn1 btn-danger" data-dismiss="modal" onclick="ajouterpanier(`+index+`)">Ajouetr au panier</button>
//                     </div>
//                 </div>
//             </div>
//         </div> 
//     </div>`

//     }

</script> 
  
</body>
</html>