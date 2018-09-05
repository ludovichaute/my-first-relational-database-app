<?php
    
    require('../controllers/req_fact_list.php');
    include 'header.php'; 

?>

<h1>Liste des factures:</h1>

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <?php
                   generatTabHeader();
                ?>
            </tr>
        </thead>
        
        <tbody>
        <?php generatTabRows(''); 
              
        ?>
        </tbody>
    </table>
    
<?php
    
require('footer.php');
  
?>