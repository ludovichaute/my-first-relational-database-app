<?php
    
    require('../controllers/req_fact_list.php');
    include 'header.php'; 

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
    
require('footer.php');
  
?>