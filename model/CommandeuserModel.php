<?php
//   session_start();
    require_once "controller/Home.php";
    require_once "db/connect.php";

    
    class CommandeuserModel{
      
        // select
        // function getAll(){
            
        //     $query ="SELECT * FROM `contact` ORDER BY id DESC";
        //     $Nobjet = new connection();
        //     $con=$Nobjet->connect();
        //     $result= $con->query($query);
        //     return $result->fetchAll(PDO::FETCH_ASSOC);
        // }

        // function getidcommande(){
        //        $query ="SELECT max(id) as 'maxid'  FROM `commande`";
        //         $Nobjet = new connection();
        //         $con=$Nobjet->connect();
        //         $result= $con->query($query);
        //         return $result->fetchAll(PDO::FETCH_ASSOC);
        // }

        // //insert

        function insert($adress,$tel,$prixtotal){
            
            $idclient=$_SESSION['email'];
            $etat="commander";
            $query= "INSERT INTO `commande` (`idclient`,`adress`,`tel`,`etat`,`prixtotal`) VALUES ($idclient,'$adress','$tel','$etat',$prixtotal)";
            // die(print_r($row));
            $Nobjet = new connection();
            $con=$Nobjet->connect();
            $result= $con->query($query);

            $query= "select max(id) as idCmd from commande";
            return $con->query($query)->fetchAll(PDO::FETCH_ASSOC)[0]["idCmd"];

           
    }

    function insertlignecmd($idproduit,$quantite,$idcommande){
        
        $query= "INSERT INTO `lignecmd`(`idproduit`, `quantite`, `idcmd`) VALUES ($idproduit,$quantite,$idcommande)";
        $Nobjet = new connection();
        $con=$Nobjet->connect();
        $result= $con->query($query);
       
}
    }