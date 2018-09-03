<?php
    // $req = $dbh->prepare("SELECT num_facture, 
    // date_facture, 
    // nom ,
    // Montant , 
    // motif
    // FROM factures, societe  ORDER BY date_facture DESC");


    $req = $dbh->prepare("SELECT *
    FROM personnes 
    LEFT JOIN factures 
    ON personnes.idpersonnes = factures.idfactures");
    // FROM societe");

    function generatTabHeader(){
        global $req;
        $req->execute();
        
        $test = $req->fetch(PDO::FETCH_ASSOC);
        // echo '<pre>';
        // print_r($test);
        // echo '</pre>';  
        $i = 0;
        foreach ($test as $key => $value) {
            $i++;
                echo '<th>'.$key.'</th>';
            if (count($test) == $i) {
                echo '<th>Action</th>';
            }
        }
        $req->closeCursor(); 
     
    }

    $req->execute();
    echo '<pre>';
    print_r($req->fetchAll(PDO::FETCH_ASSOC));
    echo '</pre>';

    function generatTabRows(){
        global $req;
        $req->execute();
        while($row = $req->fetch(PDO::FETCH_ASSOC)){
            echo '<tr>';
            $i = 0;
            
            foreach ($row as $key => $value) {
                $i++;
                echo '<td>'.$value.'</td>';
                if (count($row) == $i) {
                    echo '<td><a href= "'.$row['num_facture'].'">view</a>
                    <a href= "'.$row['num_facture'].'">edit</a>
                    <a href= "'.$row['num_facture'].'">del</a></td>';
                }
            }
            echo '</tr>';
       }
    }   
     

       
?>