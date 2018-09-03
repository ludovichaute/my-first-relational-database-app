<?php
    require('../model/model.php');
    require('../function/req_facture_list.php');
    require('header.php');
?>
<div>
    <h3>Dernières Factures</h3><a href="facture/facture_new.php">Créer une facture</a>
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
    <a href="facture/facture_list.php">Gérer les factures</a>
</div>
<div>
<h3>Dernières personnes</h3><a href="facture_cree.php">Ajouter un contact</a>
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
<div>
<h3>Dernières entreprises</h3><a href="facture_cree.php">Ajouter une entreprise</a>
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
<?php
require('footer.php');
?>