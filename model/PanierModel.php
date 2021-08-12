<?php

    require_once "controller/Home.php";
    require_once "db/connect.php";

    
    class PanierModel{

        // select
        function getAll(){
            
            $query ="SELECT * FROM `` ORDER BY id DESC";
            $Nobjet = new connection();
            $con=$Nobjet->connect();
            $result= $con->query($query);
            return $result->fetchAll(PDO::FETCH_ASSOC);
        }
  
        function getone($id){

            $query ="SELECT * FROM `` where id=$id";
            $Nobjet = new connection();
            $con=$Nobjet->connect();
            $result= $con->query($query);
            return $result->fetchAll(PDO::FETCH_ASSOC);
        }



    }
