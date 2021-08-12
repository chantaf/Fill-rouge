<?php

    require_once "controller/Home.php";
    require_once "db/connect.php";

    
    class CommandeModel{

        function getAll(){
            
            $query ="select user.id as 'idclient',user.nom,user.prenom,commande.id as 'idcmd',commande.adress,commande.tel,commande.etat,commande.prixtotal FROM `commande`,`user` WHERE commande.idclient=user.id";
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

            $query= "select etat from `commande` where id=$id";
            return $con->query($query)->fetchAll(PDO::FETCH_ASSOC)[0]["etat"];

        }

        function insertlivrer($idcmd,$idlivreur){
        
            $query="INSERT INTO `livrer`(`idlivreur`,`idcmd`) VALUES ($idlivreur,$idcmd)";
            $Nobjet = new connection();
            $con=$Nobjet->connect();
            $result= $con->query($query);
            
         }



          //delete
          function Delete($id){
            $query= "DELETE FROM `commande` WHERE id=$id";
            $Nobjet = new connection();
            $con=$Nobjet->connect();
            $con->query($query);
            
        }
        
    }