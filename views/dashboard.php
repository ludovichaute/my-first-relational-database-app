<?php
    //require('../model/model.php');
    require('../controllers/req_fact_list.php');
    require('../controllers/req_personne_list.php');
?>
<div>
    <h3 class="ml-4">Dernières Factures</h3><a class="ml-4" href="./facture_new.php">Créer une facture</a>
    <table class="table ml-4">
        <thead class="thead-dark">
        <tr>
            <?php
                generatTabHeader();
            ?>
        </tr>
        </thead>
        <?php
            generatTabRows('LIMIT 5');  
        ?>
    </table>
    <a href="./facture_list.php">Gérer les factures</a>
</div>
<div>
<h3>Dernières personnes</h3><a href="facture_new.php">Ajouter un contact</a>
    <table>
        <tr>
            <?php
                generatTabHeaderPers();
            ?>
        </tr>
        <?php 
            generatTabRowsPers('');     
        ?>
    </table>
    <a href="./personne_list.php">Gérer les personnes</a>
</div> 
<div>
<h3>Dernières entreprises</h3><a href="facture_new.php">Ajouter une entreprise</a>
    <table>
        <tr>
            <?php
                //generatTabHeader();
            ?>
        </tr>
        <?php 
            //generatTabRows(); 
        ?>
    </table>
</div>   
