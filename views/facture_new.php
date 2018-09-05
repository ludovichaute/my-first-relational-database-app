<?php
    require('../controllers/req_facture_new.php');
    include 'header.php'; 
?>
<body>
    <header>
        <h1>Ajout d'une facture</h1>
        <a href="accueil-page.php">Retour à l'accueil</a>
    </header>

        <form action="../controllers/req_facture_new.php" method="POST">
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

</body>

<?php


require('footer.php');


?>