<?php
    require('../../model/model.php');
    require('../../function/req_facture_new.php');
    require('../header.php');
?>
<header>
    <h1>ajout d'un facture</h1>
    <a href="">Retour à l'acceuil</a>
</header>
    <form action="new_invoice.php">
        <label for="">numéro de la facture</label>
        <input type="text" name="num" id="">
        <label for="">date de la facture</label>
        <input type="text" name="date" id="">
        <label for="">Société</label>
        <select name="societe" id="">
            <?php generatListSoc(); ?>
        </select>
        <label for="">Objet de la facture:</label>
        <textarea name="" id="" cols="30" rows="10"></textarea>
        <button type="submit">Sauvegarder</button>
    </form>



<?php
$row = $req->fetch(PDO::FETCH_ASSOC);
        echo '<pre>';
        echo print_r($row);
        echo '<pre>'; 
require('../footer.php');


?>