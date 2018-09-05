<?php
    //require('../model/model.php');
    require('../controllers/req_fact_list.php');
    require('../controllers/req_personne_list.php');
?>
<div>
    <h3>Dernières Factures</h3><a href="./facture_new.php">Créer une facture</a>
        <table>
            <tr>
                <?php
                    generatTabHeader();
                ?>
            </tr>
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
            //generatTabRowsPers();     
        ?>
    </table>
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
