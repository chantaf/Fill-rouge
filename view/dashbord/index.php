             <?php 
                  if($_SESSION['role']=="livreur"){
                    $livreur="hidden";
                  }else{
                    $livreur="";
                  }
                  ?>
<div <?=$livreur?> class="content">
    <div class="navCount">
                
            <div  class="order" style="background-color: rgb(2, 109, 158);">
            <i class="fa fa-users"></i>
            <div class="info">
            <?php
                foreach($result6 as $res){?>
                    <span class="numbers"><?php echo $res['nombrecommande']?></span>
            <?php    
                } ?>
                <!-- <span class="numbers">12</span> -->
                <span class="commande1">COMMANDE</span>
            </div>
            </div>

            <div   class="order" style="background-color: rgb(2, 109, 158);">
            <i class="fa fa-users"></i>
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
    

  
 
   
</body>
</html>



