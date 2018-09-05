<?php
    try
    {
        // On se connecte à MySQL
        $dbh = new PDO('mysql:host=localhost;dbname=chrichri;charset=utf8', 'root', '');
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }   
    catch(Exception $e)
    {
        // En cas d'erreur, on affiche un message et on arrête tout
            die('Erreur : '.$e->getMessage());
    }
    
    // $req = $dbh->prepare("SELECT *
    // FROM personnes
    // INNER JOIN factures 
    // ON personnes.idpersonnes = factures.idfactures ");
    // $req->execute();
    // echo '<pre>';
    // print_r($req->fetchAll(PDO::FETCH_ASSOC));
    // echo '</pre>';
    function generatListSoc(){
        
        global $dbh;
        $req = $dbh->prepare("SELECT *
        FROM societe 
        INNER JOIN factures
        ON societe.idsociete = factures.idfactures ");
        $req->execute();
        
        while($row = $req->fetch(PDO::FETCH_ASSOC)) {
               echo '<option value="'.$row['idfactures'].'">'.$row['nom_societe'].'</option>';
        }   
    } 
    function generatListPer(){
        global $dbh;
        $req = $dbh->prepare("SELECT *
        FROM personnes");
        $req->execute();
        
        while($row = $req->fetch()) {
               echo '<option value="'.$row['idpersonnes'].'">'.$row['prenom'].' '.$row['nom'].'</option>';
        }   
    } 
    

    function addInvoice(){
        global $dbh;
        
        $reqInsert = $dbh->prepare("INSERT INTO `factures` (`idfactures`, `num_facture`, `date_facture`, 
        `montant`, `objet`, `personnes_idpersonnes`, `societe_idsociete`) 
        VALUES (NULL, :numero, :datef, :montant, :objet, :societe, :personne)");
        $reqInsert->bindParam(':numero', $_POST['num']);
        $reqInsert->bindParam(':datef', $_POST['date'], PDO::PARAM_STR, 12);
        $reqInsert->bindParam(':montant', $_POST['montant'], PDO::PARAM_INT);
        $reqInsert->bindParam(':objet', $_POST['objet'], PDO::PARAM_STR,25);
        $reqInsert->bindParam(':societe', $_POST['societe'], PDO::PARAM_INT);
        $reqInsert->bindParam(':personne', $_POST['personne'], PDO::PARAM_INT);
        
        $reqInsert->execute();
        print_r($dbh);
        echo '<pre>ici';
        var_dump($_POST);
        echo '</pre>';

    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $numFacture = isset($_POST['num']);
        $dateFacture = isset($_POST['date']);
        $objetFacture = isset($_POST['objet']);
        $montantFacture = isset($_POST['montant']);
        if ($numFacture || $dateFacture || $objetFacture) {
            if (!empty($_POST['num'])) {
                echo '<p>facture envoyer</p>';
                addInvoice();
            }
        }
        
     }

     

   

?>
