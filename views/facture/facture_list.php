<?php
    require('../../model/model.php');
    require('../../function/req_facture_list.php');
    require('../header.php');

    // foreach ($test as $key => $value) {
    //     if (is_string($key)) {
    //         echo '<th>'.$key.'</th>';
    //     }   
    // }
?>

<h1>Liste des factures:</h1>

    <table>
            <tr>
                <?php
                   generatTabHeader();
                ?>
            </tr>
        <?php generatTabRows(''); 
              
        ?>
      
    </table>
    
<?php
require('../footer.php');
?>
