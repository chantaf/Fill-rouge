<?php

    require_once "controller/Home.php";
    require_once "db/connect.php";

    
    class ContactuserModel{

        // // select
        // function getAll(){
            
        //     $query ="SELECT * FROM `contact` ORDER BY id DESC";
        //     $Nobjet = new connection();
        //     $con=$Nobjet->connect();
        //     $result= $con->query($query);
        //     return $result->fetchAll(PDO::FETCH_ASSOC);
        // }

        //insert
        function insert($nom,$tel,$email,$sujet,$message){

            $query= "INSERT INTO `contact`(`nom`,`tel`,`email`, `sujet`,`message`,`repense`) VALUES ('$nom','$tel','$email','$sujet','$message','envoyer')";
            $Nobjet = new connection();
            $con=$Nobjet->connect();
            $result= $con->query($query);
        }


        // //delete
        // function Delete($id){

        //     $query= "DELETE FROM `contact` WHERE id=$id";
        //     $Nobjet = new connection();
        //     $con=$Nobjet->connect();
        //     $con->query($query);
            
        // }

    }
