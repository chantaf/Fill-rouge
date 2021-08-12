
<div class="content">
<div id="inputForm">
        <p>
            <form action="http://localhost/fill-rouge/produit/create" method ="POST" enctype="multipart/form-data">
                
                <div id="inputs">

                    <div class="col-xs-6">
                        <label for="ex3">Titre</label>
                        <input class="form-control" id="ex3" type="text" name="titre"required >
                    </div>

                    <div class="col-xs-6">
                        <label for="ex3">Prix</label>
                        <input class="form-control" id="ex3" type="text" name="prix" required>
                    </div>

                </div>

                <div id="inputs">

                 <div class="col-xs-6">
                         <label for="ex3">Description</label>
                         <input class="form-control " id="ex3" type="text" name="description" required>
                 </div>

                <div class="col-xs-6">
                         <label for="ex3">Image</label>
                         <input class="form-control" id="ex3" type="file" name="image" required>
                 </div>

                </div>


                <div id="inputs">

                        <div class="col-xs-6">
                                <label for="ex3">Categorie</label>
                                <select name="categorie" class="form-control" id="ex3">
                                    <option value="">Choisir Categorie</option>
                                        <?php
                            
                                     foreach($resultcat as $re){?>

                                            <option value=<?php  echo $re['id'] ?>><?php echo $re['libelle'] ?></option>

                                        <?php } ?>
                                </select>
                        </div>

                        <div class="col-xs-6">
                           <input type="submit"  id="buttonadd" class="btn btn-dark" value="Ajouter" name="ajouter">
                       
                        </div>

                </div>
                </form>
               

           
        </p>
    </div>




<div >

<table class="tablee table-hover" id="table">
    
    <tr>
        <th>id</th>
        <th>Titre</th>
        <th>Prix</th>
        <th>Description</th>
        <th>Image</th>
        <th>Categorie</th>
        <th>Action</th>
   
    </tr>

    <!-- loop to get rows -->
    
    <?php
            $i=0;
                foreach($result as $res){?>
                <form action="http://localhost/fill-rouge/produit/update" method="POST" enctype="multipart/form-data">
                    <tr>
                        <td><label  for=""><?php echo $res['id'] ?></label><input type="hidden" value="<?php echo $res['id'] ?>" name="id" ></td>
                        <td>
                            <label id="titrelabel<?=$i?>" for=""><?php echo $res['titre'] ?></label>
                            <input type="text" id="titre<?=$i?>" value="<?php echo $res['titre'] ?>" name="titre" style="display:none" required >
                        </td>
                        <td>
                            <label id="prixLabel<?=$i?>" for=""><?php echo $res['prix'] ?></label>
                            <input type="number" id="prix<?=$i?>" value="<?php echo $res['prix'] ?>" name="prix" style="display:none" required >
                        </td>

                        <td>
                            <label class="col-9 text-left" id="descriptionlabel<?=$i?>" for=""><?php echo $res['description'] ?></label>
                            <textarea rows="3"  cols="22" id="description<?=$i?>"  name="description" style="display:none" required><?php echo $res['description'] ?> </textarea>
                        </td>
                        <td>
                            <label id="imageLabel<?=$i?>" for=""><img src="../<?php echo $res['image'] ?>"  width="80"  alt="*"></label>
                            <input type="file" id="image<?=$i?>"  name="image" style="display:none" >
                            <label id="imageLabel1<?=$i?>" for="" style="display:none" ><img src="../<?php echo $res['image'] ?>" width="80"   alt="*"></label>
                            
                        </td>

                        <td>
                            <label id="categorieLabel<?=$i?>" for=""><?php echo $res['libelle'] ?></label>
                            <select name="categorie"  style="display:none" id="categorie<?=$i?>">
                                    <option value="">Choisir Categorie</option>
                                        <?php
                            
                                     foreach($resultcat as $re){?>

                                            <option value='<?=$re['id'] ?>'
                                            <?php if($res['libelle']==$re['libelle']){echo "selected='selected'";} ?>
                                            ><?=$re['libelle'] ?></option>

                                        <?php } ?>
                             </select> 
                            
                            
                        </td>
                        
                        <td style="display: flex;">
                            <input type="submit"  class="btn btn-success" class="saveInput" id="btnsave<?=$i?>" name="submit" value="save" style="display:none">&nbsp;&nbsp;
                            <a type="text" class="btn btn-danger " id="btncancel<?=$i?>" onclick='cancel(<?=$i?>)' style="display:none">annuler</a>
                    
    </form>
                     
                            <form action="http://localhost/fill-rouge/produit/delete" method="post">
                          
                                <input type="text" name="id" value="<?php echo $res['id'] ?>" hidden>
                                <button  class="btn btn-dark btndelete"  id="btndelet<?=$i?>" name="supprimer">supprimer</button>
                            </form> &nbsp; &nbsp;
                            <a  class="btn btn-dark btnedit" onclick='modifie(<?=$i?>)' id="btnedit<?=$i?>">Edit</a>
                        </td>
                    </tr>
        

                <?php  $i++;
            } ?>

</table>

</div>
   </div>
</div>

</div>

<script>


function modifie(e){
    document.getElementById('titrelabel'+e).style.display="none";
    document.getElementById('titre'+e).style.display="block";
    document.getElementById('prixLabel'+e).style.display="none";
    document.getElementById('prix'+e).style.display="block";
    document.getElementById('descriptionlabel'+e).style.display="none";
    document.getElementById('description'+e).style.display="block";
    document.getElementById('imageLabel'+e).style.display="none";
    document.getElementById('imageLabel1'+e).style.display="block";
    document.getElementById('image'+e).style.display="block";
    document.getElementById('categorieLabel'+e).style.display="none";
    document.getElementById('categorie'+e).style.display="block";
    document.getElementById('btnedit'+e).style.display="none";
    document.getElementById('btndelet'+e).style.display="none";
    document.getElementById('btnsave'+e).style.display="inline-block";
    document.getElementById('btncancel'+e).style.display="inline-block";
}

function cancel(e)
{
    document.getElementById('titrelabel'+e).style.display="block";
    document.getElementById('titre'+e).style.display="none";
    document.getElementById('prixLabel'+e).style.display="block";
    document.getElementById('prix'+e).style.display="none";
    document.getElementById('descriptionlabel'+e).style.display="block";
    document.getElementById('description'+e).style.display="none";
    document.getElementById('imageLabel'+e).style.display="block";
    document.getElementById('imageLabel1'+e).style.display="none";
    document.getElementById('image'+e).style.display="none";
    document.getElementById('categorieLabel'+e).style.display="block";
    document.getElementById('categorie'+e).style.display="none";
    document.getElementById('btnedit'+e).style.display="inline-block";
    document.getElementById('btndelet'+e).style.display="inline-block";
    document.getElementById('btnsave'+e).style.display="none";
    document.getElementById('btncancel'+e).style.display="none";
}

</script>

</div>
    

  
 
   
</body>
</html>



