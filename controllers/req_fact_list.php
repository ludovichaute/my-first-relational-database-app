<?php

    try
    {
        // On se connecte à MySQL
        $dbh = new PDO('mysql:host=localhost;dbname=chrichrichrichri;charset=utf8', 'root', 'root');
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }   
    catch(Exception $e)
    {
        // En cas d'erreur, on affiche un message et on arrête tout
            die('Erreur : '.$e->getMessage());
    }
   
    function generatTabHeader(){
        global $dbh;
        $req = $dbh->prepare("SELECT num_facture AS ID,
        date_facture AS 'Date',
        nom_societe AS Société,
        montant,
        objet
        FROM societe 
        INNER JOIN factures 
        ON societe.idsociete = factures.idfactures ");
        $req->execute();
        $test = $req->fetch(PDO::FETCH_ASSOC);
        $i = 0;
        foreach ($test as $key => $value) {
            $i++;
                echo '<th scope="col">'.$key.'</th>';
            if (count($test) == $i) {
                echo '<th scope="col">Action</th>';
            }
        }
        $req->closeCursor(); 
     
    }

    // $req->execute();
    // echo '<pre>';
    // print_r($req->fetchAll(PDO::FETCH_ASSOC));
    // echo '</pre>';

    function generatTabRows($limit){
        global $dbh;
        $req = $dbh->prepare("SELECT num_facture AS ID,
        date_facture AS 'Date',
        nom_societe AS Société,
        montant,
        objet
        FROM factures
        LEFT JOIN  societe 
        ON  factures.idfactures = societe.idsociete ORDER BY date_facture DESC ".$limit."");
        $req->execute();
        while($row = $req->fetch(PDO::FETCH_ASSOC)){
            echo '<tr>';
            $i = 0;
            
            foreach ($row as $key => $value) {
                $i++;
                echo '<td>'.$value.'</td>';
                if (count($row) == $i) {
                    echo '<td><a href="id='.$row['ID'].'"<i class="far fa-eye"></i>  .</a>
                    <a href="../views/facture_edit.php?id='.$row['ID'].'"><i class="far fa-edit"></i>

   .</a>
                    <a href="'.$row['ID'].'"><i class="far fa-trash-alt"></i>
</a></td>';
                }
            }
            echo '</tr>';
            
       }
       $req->closeCursor();
    }   


    //fonction edit + recup id

    function factureEdit(){
        $reqEdit = $dbh->prepare("SELECT *
        FROM societe 
        INNER JOIN factures 
        ON societe.idsociete = factures.idfactures ");
        $reqEdit->execute();
        while($row = $reqEdit->fetch(PDO::FETCH_ASSOC)){
            if ($row['idfactures'] == $_GET['id']) {
                echo 'test';
            }
            echo $row['idfactures']; 
            foreach ($row as $key => $value) {
                //idfactures
                echo '<p>'.$key.' : ' .$value.'</p>';
            }
            echo '------';
        }
    print_r($_GET);
    }
    
    
?>