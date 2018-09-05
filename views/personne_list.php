<?php
    
    require('../controllers/req_personne_list.php');
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
    
 include 'footer.php';
?>
  