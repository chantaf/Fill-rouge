<?php

    require_once "controller/Home.php";
    require_once "db/connect.php";

    
    class DetailModel{

        function getAll($idclient,$idcmd){
            $query="SELECT  lignecmd.idcmd as 'idcmd',user.id as 'idclient',user.nom,user.prenom,produit.titre,produit.description,lignecmd.quantite,commande.tel,commande.adress,commande.etat,commande.prixtotal
            FROM `lignecmd`,`commande`,`user`,`produit` 
            WHERE user.id=commande.idclient 
            and commande.id=lignecmd.idcmd 
            and lignecmd.idproduit=produit.id 
            and user.id=$idclient 
            and lignecmd.idcmd=$idcmd";
            $Nobjet = new connection();
            $con=$Nobjet->connect();
            $result= $con->query($query);
            return $result->fetchAll(PDO::FETCH_ASSOC);
        }

        function getinfos($idclient,$idcmd){
            $query="SELECT distinct lignecmd.idcmd as 'idcmd',user.id as 'idclient',user.nom,user.prenom,commande.tel,commande.adress,commande.etat,commande.prixtotal
            FROM `lignecmd`,`commande`,`user`
            WHERE user.id=commande.idclient 
            and commande.id=lignecmd.idcmd 
           
            and user.id=$idclient 
            and lignecmd.idcmd=$idcmd";
            $Nobjet = new connection();
            $con=$Nobjet->connect();
            $result= $con->query($query);
            return $result->fetchAll(PDO::FETCH_ASSOC);
        }


        
        
        function getlivreur(){
            $query="SELECT * FROM `user` WHERE role='livreur'";
            $Nobjet = new connection();
            $con=$Nobjet->connect();
            $result= $con->query($query);
            return $result->fetchAll(PDO::FETCH_ASSOC);
        }

        
    }