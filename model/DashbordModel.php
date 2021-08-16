<?php

    require_once "controller/Home.php";
    require_once "db/connect.php";

    
    class DashbordModel{

        // select

        function getcountcontact(){
            
            $query ="SELECT count(*) as 'nombrecontact' FROM `contact`  where etat='envoyer'";
            $Nobjet = new connection();
            $con=$Nobjet->connect();
            $result= $con->query($query);
            return $result->fetchAll(PDO::FETCH_ASSOC);
        }
        


  
        function getcountcommande(){
            
            $query ="SELECT count(*) as 'nombrecommande' FROM `commande` where etat='commander'";
            $Nobjet = new connection();
            $con=$Nobjet->connect();
            $result= $con->query($query);
            return $result->fetchAll(PDO::FETCH_ASSOC);
        }



        function getallcontact(){

            $query ="SELECT * FROM `contact`  where etat='envoyer' ORDER BY id DESC limit 4 ";
            $Nobjet = new connection();
            $con=$Nobjet->connect();
            $result= $con->query($query);
            return $result->fetchAll(PDO::FETCH_ASSOC);
        }

        function getallcommande(){

           
            $query ="select user.nom,user.prenom,commande.id,commande.adress,commande.tel,commande.etat,commande.prixtotal FROM `commande`,`user` WHERE commande.idclient=user.id and commande.etat='commander' ORDER BY id DESC limit 4";
            $Nobjet = new connection();
            $con=$Nobjet->connect();
            $result= $con->query($query);
            return $result->fetchAll(PDO::FETCH_ASSOC);
        }


       

    }
