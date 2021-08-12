<?php

    require_once "controller/Home.php";
    require_once "db/connect.php";

    
    class ProduitModel{

        // select
        function getAll(){
            
            $query ="SELECT p.* ,c.categorie FROM `produit` p,`categorie` c where p.idcategorie=c.id ORDER BY id DESC limit 8" ;
            $Nobjet = new connection();
            $con=$Nobjet->connect();
            $result= $con->query($query);
            return $result->fetchAll(PDO::FETCH_ASSOC);
        }
  
        function getAllcat(){
            
            $query ="SELECT * FROM `categorie`";
            $Nobjet = new connection();
            $con=$Nobjet->connect();
            $result= $con->query($query);
            return $result->fetchAll(PDO::FETCH_ASSOC);
        }

  
        function getone($id){

            $query ="SELECT * FROM `produit` where id=$id";
            $Nobjet = new connection();
            $con=$Nobjet->connect();
            $result= $con->query($query);
            return $result->fetchAll(PDO::FETCH_ASSOC);
        }


        //delete
        function Delete($id){

            $item=$this->getone($id)[0];
            unlink("./".$item["image"]);
            $query= "DELETE FROM `produit` WHERE id=$id";
            $Nobjet = new connection();
            $con=$Nobjet->connect();
            $con->query($query);
            
        }

        //update
        function update($id,$titre,$prix,$description,$image,$categorie){
        
            if(empty($image)){
            $image=$this->getone($id)[0]["image"];
            }
            // else{
            // $image=$this->getone($id)[0]["image"];
            // unlink($image);
            // die();
            // }

            $query = "UPDATE `produit` SET `titre`='$titre' ,`prix`= $prix ,`description`='$description' ,`image`= '$image',`idcategorie`=$categorie WHERE id=$id";
            $Nobjet = new connection();
            $con=$Nobjet->connect();
            $result= $con->query($query);
            return $result->fetch(PDO::FETCH_ASSOC);
        }

        //insert
        function insert($titre,$prix,$description,$image,$categorie){
           
            $query= "INSERT INTO `produit`(`titre`,`prix`,`description`,`image`,`idcategorie`) VALUES ('$titre',$prix,'$description','$image',$categorie)";
            $Nobjet = new connection();
            $con=$Nobjet->connect();
            $result= $con->query($query);
        }



        function getcategorie($categorie){
            $query ="SELECT produit.* FROM `produit`,`categorie` where produit.idcategorie=categorie.id and categorie.categorie='".$categorie."'";
            $Nobjet = new connection();
            $con=$Nobjet->connect();
            $result= $con->query($query);
            return $result->fetchAll(PDO::FETCH_ASSOC);
        }


        function getproduit($categorie){
            $query ="SELECT * FROM `produit` where idcategorie=$categorie";
            $Nobjet = new connection();
            $con=$Nobjet->connect();
            $result= $con->query($query);
            return $result->fetchAll(PDO::FETCH_ASSOC);
        }

        
        function getcount($categorie){
            $query ="SELECT count(id) FROM `produit`,`categorie` where produit.idcategorie=categorie.id and categorie.categorie='".$categorie."'";
            $Nobjet = new connection();
            $con=$Nobjet->connect();
            $tcount= $con->query($query);
            return  $tcount->fetchAll(PDO::FETCH_ASSOC);
        }
    }
