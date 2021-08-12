<?php

    require_once "controller/Home.php";
    require_once "db/connect.php";

    
    class CommandelivreurModel{

        function getAll($idlivreur){
            
            $query ="select DISTINCT user.id as 'idclient',user.nom,user.prenom,commande.id as 'idcmd',commande.adress,commande.tel,commande.etat
             FROM `commande`,`user`,`livrer` 
             WHERE commande.idclient=user.id 
             and commande.etat !='valider'
             and commande.id in
              ( SELECT livrer.idcmd FROM `livrer`,`user` where livrer.idlivreur=$idlivreur)";
            $Nobjet = new connection();
            $con=$Nobjet->connect();
            $result= $con->query($query);
            
            return $result->fetchAll(PDO::FETCH_ASSOC);
           
        }



       

        //update
        function update($id,$etat){
            
            $query="UPDATE `commande` SET `etat`='$etat' WHERE id=$id";
            $Nobjet = new connection();
            $con=$Nobjet->connect();
            $result= $con->query($query);

        }

       
        
    }