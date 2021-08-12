<div class="text-center mb-5">
        <h1 class="text-info display-3"><b>Vos commandes</b></h1>
    </div>

<div>


<div class="container">
    <form  action="http://localhost/fill-rouge/profiluser/" method="post">
        <button class="btn btn-dark mb-3 float-right  btn-md ml-3 text-white"><-retour</button>
    </form>
    <div class="row">
        <div class="span5">
            <table class="table table-hover table-condensed">
                  <thead style="background-color: #0635C9;">
                  <tr class="text-white">
                  
                  <th>Produit</th>
                  <th>Quantite</th>
                  <th>Description</th>
                  
                
                  </tr>
              </thead>   
              <tbody>
                <tr>
                     
    <?php
                    
                    $i=0;
                        foreach($resultdetail as $res){?>
                        
                            <tr>
                             
                            <td><label  for=""><?php echo $res['titre'] ?></label><input type="hidden" value="<?php echo $res['titre'] ?>" ></td>
        
                            <td><label  for=""><?php echo $res['quantite'] ?></label><input type="hidden" value="<?php echo $res['quantite'] ?>" ></td>
                            
                            <td><label  for=""><?php echo $res['description'] ?></label><input type="hidden" value="<?php echo $res['description'] ?>" ></td>
                            
                            </tr>
                            <?php  $i++;
                    } ?>
             <?php
                    
                  
                        foreach($resultprixtotal as $re){?>
                            <td></td>
                            <td><b> Prix total :<label  for=""><?php echo $re['prixtotal'] ?></label></b></td>
                <?php  } ?>
                          <td>

                           
                        <form  class="row" action="http://localhost/fill-rouge/detaillignecmd/delete" method="post">
                            <input type="hidden" value="<?php echo $res['idcmd'] ?>" name="idcmd">
                            <button class="btn btn-danger btn-md ml-3 text-white" name="supprimer" >Supprimer</button>
                            </td>
                        </form>
                              
                           
                
        
                                            
                </tr>
          
                                             
              </tbody>
            </table>
            </div>
    </div>
</div>



</div>



<div>



