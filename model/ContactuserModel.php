<?php

    require_once "controller/Home.php";
    require_once "db/connect.php";

    
    class ContactuserModel{

     

        //insert
        function insert($nom,$tel,$email,$sujet,$message){

            $query= "INSERT INTO `contact`(`nom`,`tel`,`email`, `sujet`,`message`,`etat`) VALUES ('$nom','$tel','$email','$sujet','$message','envoyer')";
            $Nobjet = new connection();
            $con=$Nobjet->connect();
            $result= $con->query($query);
        }


    }
