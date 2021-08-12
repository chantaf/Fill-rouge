<?php

    require_once "controller/Home.php";
    require_once "db/connect.php";

    
    class DashbordModel{

        // select

        function getcountcontact(){
            
            $query ="SELECT count(*) as 'nombrecontact' FROM `contact`  where repense='envoyer'";
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

            $query ="SELECT * FROM `contact`  where repense='envoyer' ORDER BY id DESC limit 6";
            $Nobjet = new connection();
            $con=$Nobjet->connect();
            $result= $con->query($query);
            return $result->fetchAll(PDO::FETCH_ASSOC);
        }

        function getallcommande(){

            $query ="SELECT commande.id,commande.etat,user.nom,user.prenom FROM `commande`,`user` where user.id=commande.idclient and etat='commander' ORDER BY id DESC limit 6";
            $Nobjet = new connection();
            $con=$Nobjet->connect();
            $result= $con->query($query);
            return $result->fetchAll(PDO::FETCH_ASSOC);
        }

        // function getallcommande(){

        //     $query ="SELECT * FROM `commande` ORDER BY id DESC";
        //     $Nobjet = new connection();
        //     $con=$Nobjet->connect();
        //     $result= $con->query($query);
        //     return $result->fetchAll(PDO::FETCH_ASSOC);
        // }


       

    }
