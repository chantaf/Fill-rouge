<?php

    require_once "controller/Home.php";
    require_once "db/connect.php";

    
    class DetaillignecmdModel{

        function getAll($idclient,$idcmd){
            
            $query ="SELECT commande.id as 'idcmd',produit.titre,produit.description,lignecmd.quantite 
            FROM `produit`,`lignecmd`,`commande`
             WHERE produit.id =lignecmd.idproduit 
             and lignecmd.idcmd=commande.id 
             and commande.idclient=$idclient 
             and lignecmd.idcmd=$idcmd";
            $Nobjet = new connection();
            $con=$Nobjet->connect();
            $result= $con->query($query);
            
            return $result->fetchAll(PDO::FETCH_ASSOC);
           
        }

        function getprixtotal($idcmd){
            
            $query ="SELECT * FROM `commande` where id=$idcmd";
            $Nobjet = new connection();
            $con=$Nobjet->connect();
            $result= $con->query($query);
            
            return $result->fetchAll(PDO::FETCH_ASSOC);
           
        }



   


          //delete
          function Delete($id){
            $query= "DELETE FROM `commande` WHERE id=$id";
            $Nobjet = new connection();
            $con=$Nobjet->connect();
            $con->query($query);
            
        }
        
    }