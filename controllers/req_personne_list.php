<?php

require('../model/model.php');
   
    function generatTabHeaderPers(){
        global $dbh;
        $req = $dbh->prepare("SELECT
        nom, prenom, email, phone, nom_societe as Société
        FROM
        societe
            INNER JOIN personnes ON societe.idsociete = personnes.idpersonnes");
        $req->execute();
        $test = $req->fetch(PDO::FETCH_ASSOC);
        $i = 0;
        foreach ($test as $key => $value) {
            $i++;
                echo '<th>'.$key.'</th>';
            if (count($test) == $i) {
                echo '<th>Action</th>';
            }
        }
        $req->closeCursor(); 
        $req->execute();
        // echo '<pre>';
        // print_r($req->fetchAll(PDO::FETCH_ASSOC));
        // echo '</pre>';
    }

   

    function generatTabRowsPers($limit){
        global $dbh;
        $req = $dbh->prepare("SELECT
        nom, prenom, email, phone, 
        nom_societe
        FROM
        societe
            INNER JOIN personnes ON societe.idsociete = personnes.idpersonnes ORDER BY nom DESC ".$limit."");
        $req->execute();
        while($row = $req->fetch(PDO::FETCH_ASSOC)){
            echo '<tr>';
            $i = 0;
            
            foreach ($row as $key => $value) {
                $i++;
                echo '<td>'.$value.'</td>';
                if (count($row) == $i) {
                    echo '<td><a href="id='.$row['nom'].'">view</a>
                    <a href="../views/personne_edit.php?id='.$row['nom'].'">edit</a>
                    <a href="'.$row['nom'].'">del</a></td>';
                }
            }
            echo '</tr>';
            
       }
       $req->closeCursor();
    }   


    //fonction edit + recup id

    // function factureEdit(){
    //     $reqEdit = $dbh->prepare("SELECT *
    //     FROM societe 
    //     INNER JOIN factures 
    //     ON societe.idsociete = factures.idfactures ");
    //     $reqEdit->execute();
    //     while($row = $reqEdit->fetch(PDO::FETCH_ASSOC)){
    //         if ($row['idfactures'] == $_GET['id']) {
    //             echo 'test';
    //         }
    //         echo $row['idfactures']; 
    //         foreach ($row as $key => $value) {
    //             //idfactures
    //             echo '<p>'.$key.' : ' .$value.'</p>';
    //         }
    //         echo '------';
    //     }
    // print_r($_GET);
    // }
    
    
?>