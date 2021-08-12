<?php

    require_once "controller/Home.php";
    require_once "db/connect.php";

    
    class ProfiluserModel{

        // select
  
        function getone($id){

            $query ="SELECT * FROM `user` where id=$id";
            $Nobjet = new connection();
            $con=$Nobjet->connect();
            $result= $con->query($query);
            return $result->fetchAll(PDO::FETCH_ASSOC);
        }

        function getpassword($id,$password){

            $query ="SELECT * FROM `user` where id=$id and password='$password'";
            $Nobjet = new connection();
            $con=$Nobjet->connect();
            $result= $con->query($query)->fetchAll();
            if(!empty($result)){
                return true;
            }else{
                return false;
            }
        }

        function getcommande(){

            $query ="SELECT * from`commande`";
             $Nobjet = new connection();
             $con=$Nobjet->connect();
             $result= $con->query($query);
             return $result->fetchAll(PDO::FETCH_ASSOC);
        }

        function getcommande1($id){

            $query ="SELECT commande.id as 'idcmd',commande.etat,produit.titre,produit.description,lignecmd.quantite 
            FROM `produit`,`lignecmd`,`commande` 
            WHERE produit.id =lignecmd.idproduit
             and lignecmd.idcmd=commande.id 
             and commande.idclient=$id";
             $Nobjet = new connection();
             $con=$Nobjet->connect();
             $result= $con->query($query);
             return $result->fetchAll(PDO::FETCH_ASSOC);
        }

        // function getselect($id){

        //     $query ="SELECT distinct commande.id as 'idcmd'
        //     FROM `produit`,`lignecmd`,`commande` 
        //     WHERE produit.id =lignecmd.idproduit
        //     and lignecmd.idcmd=commande.id 
        //     and  commande.etat='commander'
        //     and commande.idclient=$id";
        //      $Nobjet = new connection();
        //      $con=$Nobjet->connect();
        //      $result= $con->query($query);
        //      return $result->fetchAll(PDO::FETCH_ASSOC);
        // }

        //delete
        function Delete($id){
            $query= "DELETE FROM `user` WHERE id=$id";
            $Nobjet = new connection();
            $con=$Nobjet->connect();
            $con->query($query);
            $_SESSION['nom']="Mon compte";
        }

        function Deletecommande($id){
            $query= "DELETE FROM `commande` WHERE id=$id";
            $Nobjet = new connection();
            $con=$Nobjet->connect();
            $con->query($query);
        }

        //update
        function update($id,$nom,$prenom,$email){
            $query = "UPDATE `user` SET `nom`='$nom' ,`prenom`='$prenom',`email`='$email' WHERE id=$id";
            $Nobjet = new connection();
            $con=$Nobjet->connect();
            $result= $con->query($query);
            return $result->fetch(PDO::FETCH_ASSOC);
        }

        function updatepassword($id,$password){
            $query = "UPDATE `user` SET `password`='$password' WHERE id=$id";
            $Nobjet = new connection();
            $con=$Nobjet->connect();
            $result= $con->query($query);
            return $result->fetch(PDO::FETCH_ASSOC);
        }

        function logout(){
            session_start();
            session_destroy();
            
        }

    }
