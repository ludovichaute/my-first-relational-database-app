<?php

    require('../model/model.php');
    require('../controllers/req_facture_new.php');
    include 'header.php'; 

    
    $factPers = $dbh->prepare("SELECT *
    FROM factures
    LEFT JOIN personnes 
    ON personnes.idpersonnes = factures.idfactures WHERE num_facture = :numfac");
    $factPers->bindparam(':numfac', $_GET['id']);

    

    $factPers->execute();
    $reqFactPers =$factPers->fetch(PDO::FETCH_ASSOC);
    echo '<pre>';
//    print_r($reqFactPers);
    echo '</pre>';

    // $factPers->closeCursor();


    $societeFac = $dbh->prepare("SELECT *
    FROM factures
    LEFT JOIN societe
    ON factures.idfactures = societe.idsociete WHERE num_facture = :idf");
    $societeFac->bindparam(':idf', $_GET['id']);
    $societeFac->execute();
    $reqSocieteFac = $societeFac->fetch(PDO::FETCH_ASSOC);
    echo '<pre>';
//    print_r($reqSocieteFac);
    echo '</pre>';

?>
<header>
    <h1>Editer la facture</h1>
    <a href="accueil-page.php">Retour à l'accueil</a>
</header>
    <form action="../../function/req_facture_edit.php" method="POST">
        <label>numéro de la facture</label>
        <input type="text" name="num" value="<?php echo $reqFactPers['num_facture']; ?>">
        <label>date de la facture</label>
        <input type="date" name="date" value="<?php echo $reqFactPers['date_facture']; ?>">
        <label >Société: </label>
        <select name="societe">
        <option value="<?php echo $reqSocieteFac['societe_idsociete']; ?>"><?php echo $reqSocieteFac['nom_societe']; ?></option>
            <?php generatListSoc(); ?>
            
        </select>
        <label >Nom: </label>
        <select name="personne">
        <option value="<?php echo $reqFactPers['personnes_idpersonnes']; ?>"><?php echo $reqFactPers['prenom'].' '.$reqFactPers['nom']; ?></option>
            <?php generatListPer(); ?>
        </select>
        <label>Objet de la facture:</label>
        <textarea name="objet" id="" cols="30" rows="10"><?php echo $reqFactPers['objet']; ?></textarea>
        <label>Montant: </label>
        <input type="text" name="montant" value="<?php echo $reqFactPers['montant']; ?>">
        
        <button type="submit">Sauvegarder</button>
    </form>



<?php

require('footer.php');


?>