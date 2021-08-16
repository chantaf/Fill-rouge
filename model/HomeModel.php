<?php

    require_once "controller/Home.php";
    require_once "db/connect.php";

    
    class HomeModel{

        // select
        function getlegume(){
            
            $query ="SELECT produit.* FROM `produit`,`categorie` where produit.idcategorie=categorie.id and categorie.categorie='Legumes' LIMIT 4";
            $Nobjet = new connection();
            $con=$Nobjet->connect();
            $result= $con->query($query);
            return $result->fetchAll(PDO::FETCH_ASSOC);
        }



        function getfruit(){
            
            $query ="SELECT produit.* FROM `produit`,`categorie` where produit.idcategorie=categorie.id and categorie.categorie='Fruits' LIMIT 4";
            $Nobjet = new connection();
            $con=$Nobjet->connect();
            $result= $con->query($query);
            return $result->fetchAll(PDO::FETCH_ASSOC);
        }



        function getherbes(){
            
            $query ="SELECT produit.* FROM `produit`,`categorie` where produit.idcategorie=categorie.id and categorie.categorie='Herbes' LIMIT 4";
            $Nobjet = new connection();
            $con=$Nobjet->connect();
            $result= $con->query($query);
            return $result->fetchAll(PDO::FETCH_ASSOC);
        }


        function getpanier(){
            
            $query ="SELECT produit.* FROM `produit`,`categorie` where produit.idcategorie=categorie.id and categorie.categorie='Panier-Mix' LIMIT 4";
            $Nobjet = new connection();
            $con=$Nobjet->connect();
            $result= $con->query($query);
            return $result->fetchAll(PDO::FETCH_ASSOC);
        }

       
    }