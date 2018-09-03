<?php
    


    $req = $dbh->prepare("SELECT num_facture AS ID, 
    date_facture AS 'Date', 
    nom AS Societe,
    Montant , 
    article AS Objet
    FROM factures , societe, societe_type  ORDER BY date_facture DESC");
   

    function generatListSoc(){
        global $req;
        $req->execute();
        // while($row = $req->fetch()) {
              
        //         echo '<option value="'.$row['Societe'].'">'.$row['Societe'].'</option>';
            
        // }  
        $row = $req->fetch()  ;
        echo '<pre>';
                echo print_r($row);
                echo '<pre>';   
    } 
     
    // while($test = $req->fetch()){
    //     echo '<tr>';
    //     $i = 0;
    //     foreach ($test as $key => $value) {
          
    //         if (is_string($key)) {
    //             echo '<td>'.$value.'</td>'; 
    //         }
         
    //     }
    //     echo '</tr>';
    // }
    //header('Location: ' .$_SERVER['HTTP_REFERER']);

?>
