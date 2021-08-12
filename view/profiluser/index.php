<!-- <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title> -->
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="http://localhost/fill-rouge/view/css/styleprofiluser.css" />

<!-- </head> -->
<!-- cdn jquery -->
<script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
  <!-- include header & footer -->
<script src="../../resources/js/includeTemp.js"></script>

<body  >
  <!-- header -->
<div id="header"></div>
  <!--  -->

    <div id="mon_compte" class="mt-5 mb-5 p-3">


        <div class="container contact-form primary-border primary-raduis  ">
            <div class="user-image">
                <img src="http://localhost/fill-rouge/view/img-slide/profil1.png" alt="#" />
            </div>
            <div class="p-5 row information">
                <div class="col-12 d-flex flex-column align-items-center">
                    <h3 class="">INFORMATIONS PERSONELLES</h3>
                    <div class="line  mt-3"></div>
                </div>
                <?php foreach($result as $res){?>
                <div class="col-lg-6  col-12 ps-lg-5">

                    <h5>Nom : <span> <?= $res['nom'] ?></span></h5>
                    <h5>Prenom : <span><?= $res['prenom'] ?></span></h5>
                    <!-- <h5>Telephone : <span>0621409091</span></h5>
                    <h5>Genre : <span>Homme</span></h5> -->

                </div>
                <div class="col-lg-12 col-12 ps-lg-5">

                    <h5>Email ou Tel : <span><?= $res['email'] ?></span></h5>
                    <!-- <h5>Address 1 : <span>87 RUE ZEPIFZ QU ZFNUOZE OIRJ</span></h5>
                    <h5>Address 2 : <span>87 RUE ZEPIFZ QU ZFNUOZE OIRJ</span></h5> -->
                </div>
                <div class="col-lg-3 col-6 m-auto mt-2">
                
                    <button data-bs-toggle="modal" data-bs-target="#exampleModal"
                        class="mybtn size-btn w-100  secondary-border secondary-raduis mb-2">Modifier</button>
                       
                    <form  action="http://localhost/fill-rouge/profiluser/delete" method="post">
                    <button type="submit" name="supprimer" data-bs-toggle="modal" 
                        class="mybtn size-btn w-100  secondary-border secondary-raduis">Supprimer compte</button>
                    </form>
                </div>
                <div class="col-lg-3 col-6 m-auto mt-2">
                
                    <button data-bs-toggle="modal" data-bs-target="#exampleModale"
                        class="mybtn size-btn w-100  secondary-border secondary-raduis mb-2">Changer Password</button>
                       
                 <form action="http://localhost/fill-rouge/profiluser/logout" method="post">
                    <button type="submit" name="logout" data-bs-toggle="modal" 
                        class="mybtn size-btn w-100  secondary-border secondary-raduis">Se deconnecter</button>
                </form>
                </div>
            </div>


        </div>




        <!-- Modal password-->
        <form method="post" action="http://localhost/fill-rouge/profiluser/updatepassword">
        <div class="modal fade" id="exampleModale" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content primary-border">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Informations personelles</h5>
                        <button type="button" class="mybtn-icon secondary-raduis secondary-border"
                            data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times-circle"></i></button>
                    </div>
                    <div class="modal-body">
                        <!-- <form action=""> -->
                            <div class="row">
                                <div class="col-12">
                                    <label for="pass" class="mt-1"> ancien password : </label>
                                    <input name="ancienpassword" class="w-100 secondary-border secondary-raduis form-control" type="password"
                                      required  >
                                </div>
                              
                                <div class="col-12">
                                    <label for="password" class="mt-1"> nouveau password: </label>
                                    <input name="password" id="password" class="w-100 secondary-border secondary-raduis form-control" type="password"
                                       required >

                                    <label for="password1" class="mt-1">confirm nouveau password: </label>
                                    <input name="password1" id="confpassword" onblur="verificationpassword()" class="w-100 secondary-border secondary-raduis form-control" type="password" 
                                    required  >
                                </div>
                            </div>
                        <!-- </form> -->
                    </div>
                    <div class="modal-footer">
                   
                        <button type="submit" name="updatepassword" class="mybtn secondary-raduis secondary-border">Enregistrez</button>
                   </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- end modal -->


         <!-- Modal infos -->
         <form method="post" action="http://localhost/fill-rouge/profiluser/update">
         <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content primary-border">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Informations personelles</h5>
                        <button type="button" class="mybtn-icon secondary-raduis secondary-border"
                            data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times-circle"></i></button>
                    </div>
                    <div class="modal-body">
                        <!-- <form action=""> -->
                            <div class="row">
                                <div class="col-6">
                                    <label for="nom" class="mt-1"> Nom : </label>
                                    <input name="nom" class="w-100 secondary-border secondary-raduis form-control" type="text"
                                        value="<?= $res['nom']?>">
                                   
                                </div>
                                <div class="col-6">
                                    <label for="prenom" class="mt-1"> Prenom : </label>
                                    <input name="prenom" class="w-100 secondary-border secondary-raduis form-control" type="text"
                                        value="<?= $res['prenom']?>">
                                </div>

                                <div class="col-12">
                                    <label for="email" class="mt-1"> Email ou Tel : </label>
                                    <input name="email" class="w-100 secondary-border secondary-raduis form-control" type="text"
                                        value="<?= $res['email']?>">
                                </div>
                            </div>
                        <!-- </form> -->
                    </div>
                    <div class="modal-footer">
                    
                        <button type="submit" name="update" class="mybtn secondary-raduis secondary-border">Enregistrez</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- end modal -->

    </div>
    <!-- Footer -->

<!-- <div id="footer"></div> -->
    <!-- end footer -->
    <div class="text-center mb-5">
        <h1 class="text-info display-3" > Vos commandes</h1>
    </div>

<div>


<div class="container">
    <div class="row">
        <div class="span5">
            <table class="table table-hover table-condensed">
                  <thead style="background-color: #0635C9;">
                  <tr class="text-white">
                  <th>Numero Commande</th>
                  <th>Address</th>
                  <th>Tel</th>
                  <th>Prixtotal</th>
                  <th>Etat</th>     
                  <!-- <th>Action</th>                                      -->
                  </tr>
              </thead>   
              <tbody>
                <tr>
                     
    <?php
                    
                    $i=0;
                        foreach($resultcmd as $res){?>
                        
                            <tr>
                            <td><label  for=""><?php echo $res['id'] ?></label><input type="hidden" value="<?php echo $res['id'] ?>" name="id" ></td>
                             
                            <td><label  for=""><?php echo $res['adress'] ?></label><input type="hidden" value="<?php echo $res['adress'] ?>" name="adress" ></td>
        
                            <td><label  for=""><?php echo $res['tel'] ?></label><input type="hidden" value="<?php echo $res['tel'] ?>" name="tel" ></td>
        
                            <td><label  for=""><?php echo $res['prixtotal'] ?></label><input type="hidden" value="<?php echo $res['prixtotal'] ?>" name="prixtotal" ></td>
        
                            <td class="text-center">
                                <label   for=""><?php echo $res['etat'] ?></label><input type="hidden" value="<?php echo $res['etat'] ?>" name="etat" >
                        <form class="row" action="http://localhost/fill-rouge/detaillignecmd/" method="post">
                            <input type="hidden" value="<?php echo $res['id'] ?>" name="idcommande">
                            <button class="btn btn-info btn-md ml-3 text-white"  >Detail</button>
                            </td>
                        </form>
                              
                            </tr>
                
        
                        <?php  $i++;
                    } ?>
                                                     
                </tr>
                <!-- <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                <form action="http://localhost/fill-rouge/profiluser/deletecommande" method="post">
                    <td>
                    <select name="idcmd"  class="form-control">
                            <option value="">choisir numero commande</option>
                        <?php
                           
                            foreach($resultselect as $re){?>
                                    
                                   <option value='<?=$re['idcmd'] ?>'><?=$re['idcmd'] ?></option>
                                   

                               <?php } ?>
                           </select> 
                    </td>
                    <td>
                    <button class="btn btn-warning text-white btndelete"  id="btndelet<?=$i?>" name="supprimer">supprimer</button>
                    </td>
                    </form> 
                </tr> -->
                                             
              </tbody>
            </table>
            </div>
    </div>
</div>



<!-- 
**************** -->
</div>

<!-- modele commande -->



        <!-- end modal -->


<!-- end -->

<div>
<!-- <td style="display: flex;"> -->
                     
                     <!-- <form action="http://localhost/fill-rouge/profiluser/deletecommande" method="post">
                        <select name="idcmd"  class="selectcommande">
                            <option value="">choisir id commande</option>
                        <?php
                           
                            foreach($resultselect as $re){?>
                                    
                                   <option value='<?=$re['idcmd'] ?>'><?=$re['idcmd'] ?></option>
                                   

                               <?php } ?>
                           </select> 
                     
                         
                         <button class="btn btn-danger btndelete"  id="btndelet<?=$i?>" name="supprimer">supprimer</button>
                     </form>  -->
                 <!-- </td> -->
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <?php   } ?>
    <script src="http://localhost/fill-rouge/view/js/panier.js"></script>
</body>

</html>