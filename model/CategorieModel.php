<?php

    require_once "controller/Home.php";
    require_once "db/connect.php";

    
    class CategorieModel{

        // select
        function getAll(){
            
            $query ="SELECT * FROM `categorie` ORDER BY id DESC";
            $Nobjet = new connection();
            $con=$Nobjet->connect();
            $result= $con->query($query);
            return $result->fetchAll(PDO::FETCH_ASSOC);
        }
  
        
        function getone($id){

            $query ="SELECT * FROM `categorie` where id=$id";
            $Nobjet = new connection();
            $con=$Nobjet->connect();
            $result= $con->query($query);
            return $result->fetchAll(PDO::FETCH_ASSOC);
        }



        //delete
        function Delete($id){

            $query= "DELETE FROM `categorie` WHERE id=$id";
            $Nobjet = new connection();
            $con=$Nobjet->connect();
            $con->query($query);
            
        }

        //update
        function update($id,$categorie,){
        
            $query = "UPDATE `categorie` SET `categorie`='$categorie'  WHERE id=$id";
            $Nobjet = new connection();
            $con=$Nobjet->connect();
            $result= $con->query($query);
            return $result->fetch(PDO::FETCH_ASSOC);
        }

        //insert
        function insert($categorie){

            $query= "INSERT INTO `categorie`(`categorie`) VALUES ('$categorie')";
            $Nobjet = new connection();
            $con=$Nobjet->connect();
            $result= $con->query($query);
        }

    }
