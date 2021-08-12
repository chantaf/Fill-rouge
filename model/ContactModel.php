<?php

    require_once "controller/Home.php";
    require_once "db/connect.php";

    
    class ContactModel{

        // select
        function getAll(){
            
            $query ="SELECT * FROM `contact` ORDER BY id DESC";
            $Nobjet = new connection();
            $con=$Nobjet->connect();
            $result= $con->query($query);
            return $result->fetchAll(PDO::FETCH_ASSOC);
        }

       

        //delete
        function Delete($id){

            $query= "DELETE FROM `contact` WHERE id=$id";
            $Nobjet = new connection();
            $con=$Nobjet->connect();
            $con->query($query);
            
        }

    }
