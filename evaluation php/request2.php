<?php 

     $db = new PDO('mysql:host=localhost;dbname=evaluationsql', 'root', 'root'); 

    if($_POST){
        $titre = $_POST['titre'];
        $synopsis = $_POST['synopsis']; 
        if(!empty ($titre) AND !empty($synopsis)){
            mysqli_query('INSERT TO Livre ( titre , synopsis) VALUES ("'.$titre.'" , "'.$synopsis.'")') or die ('erreur :'.mysql_error());
            echo "ok!" ;
        }
        else echo "erreur";
    }

?>

