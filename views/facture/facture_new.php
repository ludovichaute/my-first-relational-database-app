<?php

    require('../../function/req_facture_new.php');
    require('../header.php');
?>
<header>
    <h1>ajout d'une facture</h1>
    <a href="">Retour à l'acceuil</a>
</header>
    <form action="../../function/req_facture_new.php" method="POST">
        <label>numéro de la facture</label>
        <input type="text" name="num">
        <label>date de la facture</label>
        <input type="date" name="date">
        <label >Société: </label>
        <select name="societe">
            <?php generatListSoc(); ?>
        </select>
        <label >Nom: </label>
        <select name="personne">
            <?php generatListPer(); ?>
        </select>
        <label>Objet de la facture:</label>
        <textarea name="objet" id="" cols="30" rows="10"></textarea>
        <label>Montant: </label>
        <input type="text" name="montant">
        
        <button type="submit">Sauvegarder</button>
    </form>



<?php

require('../footer.php');


?>