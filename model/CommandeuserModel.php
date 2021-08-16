<?php
//   session_start();
    require_once "controller/Home.php";
    require_once "db/connect.php";

    
    class CommandeuserModel{
      

        function insert($adress,$tel,$prixtotal){
            
            $idclient=$_SESSION['email'];
            $etat="commander";
            $query= "INSERT INTO `commande` (`idclient`,`adress`,`tel`,`etat`,`prixtotal`) VALUES ($idclient,'$adress','$tel','$etat',$prixtotal)";
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