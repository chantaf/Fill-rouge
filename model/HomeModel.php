<?php

    require_once "controller/Home.php";
    require_once "db/connect.php";

    
    class HomeModel{

        // select
        function getlegume(){
            
            $query ="SELECT produit.* FROM `produit`,`categorie` where produit.idcategorie=categorie.id and categorie.libelle='Legumes' LIMIT 4";
            $Nobjet = new connection();
            $con=$Nobjet->connect();
            $result= $con->query($query);
            return $result->fetchAll(PDO::FETCH_ASSOC);
        }



        function getfruit(){
            
            $query ="SELECT produit.* FROM `produit`,`categorie` where produit.idcategorie=categorie.id and categorie.libelle='Fruits' LIMIT 4";
            $Nobjet = new connection();
            $con=$Nobjet->connect();
            $result= $con->query($query);
            return $result->fetchAll(PDO::FETCH_ASSOC);
        }



        function getherbes(){
            
            $query ="SELECT produit.* FROM `produit`,`categorie` where produit.idcategorie=categorie.id and categorie.libelle='Herbes' LIMIT 4";
            $Nobjet = new connection();
            $con=$Nobjet->connect();
            $result= $con->query($query);
            return $result->fetchAll(PDO::FETCH_ASSOC);
        }


        function getpanier(){
            
            $query ="SELECT produit.* FROM `produit`,`categorie` where produit.idcategorie=categorie.id and categorie.libelle='Panier-Mix' LIMIT 4";
            $Nobjet = new connection();
            $con=$Nobjet->connect();
            $result= $con->query($query);
            return $result->fetchAll(PDO::FETCH_ASSOC);
        }

       
    }