<?php
    
    require('../controllers/req_personne_list.php');
    include 'header.php'; 

?>

<h1>Liste des factures:</h1>

    <table class="table">
           <thead class="thead-dark">
            <tr class="">
                <?php
                   generatTabHeaderPers();
                ?>
            </tr>
        <?php generatTabRowsPers(''); 
              
        ?>
           </thead>
    </table>@
    
<?php
    
 include 'footer.php';
?>
  