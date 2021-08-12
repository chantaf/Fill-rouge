<?php

    require_once "controller/Home.php";
    require_once "db/connect.php";

    
    class LoginModel{

        function getAll(){
            
            $query ="SELECT * FROM `user` ORDER BY id DESC limit 10 ";
            $Nobjet = new connection();
            $con=$Nobjet->connect();
            $result= $con->query($query);
            return $result->fetchAll(PDO::FETCH_ASSOC);
        }



        function save($nom,$prenom,$email,$password){
            
            $query="INSERT INTO `user`(`nom`, `prenom`, `email`, `password`,`role`) VALUES ('$nom','$prenom','$email','$password','user')";
            $Nobjet = new connection();
            $con=$Nobjet->connect();
          
                $result= $con->query($query);
               
        }

        function auth($email,$password){

            $query ="select * from user where email='$email' and password='$password'";
            $Nobjet = new connection();
            $con=$Nobjet->connect();
            $result= $con->query($query);
            return $result->fetchAll(PDO::FETCH_ASSOC);
            
        }

   

        function logout(){
            session_start();
            session_destroy();
        }

        function saveadmin($nom,$prenom,$email,$password,$role){
            
            $query="INSERT INTO `user`(`nom`,`prenom`,`email`,`password`,`role`) VALUES ('$nom','$prenom','$email','$password','$role')";
            $Nobjet = new connection();
            $con=$Nobjet->connect();
            $result= $con->query($query);
               
        }

        //update
        function updateadmin($id,$nom,$prenom,$email,$password,$role){
            
            $query="UPDATE `user` SET `nom`='$nom' ,`prenom`='$prenom',`email`='$email',`password`='$password',`role`='$role' WHERE id=$id";
            $Nobjet = new connection();
            $con=$Nobjet->connect();
            $result= $con->query($query);
               
        }


          //delete
          function Delete($id){
            $query= "DELETE FROM `user` WHERE id=$id";
            $Nobjet = new connection();
            $con=$Nobjet->connect();
            $con->query($query);
            
        }
        
    }