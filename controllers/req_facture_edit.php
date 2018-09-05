<?php 
    require('../model/model.php');
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';
    $updateFac = $dbh->prepare("UPDATE factures 
    SET num_facture = '12', `date_facture` = '2018-09-15', `montant` = '3', `objet` = 'kit ping dq', `personnes_idpersonnes` = '2', `societe_idsociete` = '3' WHERE `factures`.`idfactures` = 1;")
    
   // $updateFac->execute();
   
  
    
    
  //header('location: ../views/facture/facture_edit.php');
?>