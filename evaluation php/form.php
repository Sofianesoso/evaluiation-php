<?php
include 'request2.php'
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


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

    <form action = "liste.php" method ="post">
        
            <input type = "text" class = "form-control" id ="titre" />
            <input type = "text" class = "form-control" id = "synopsis" />
            <input type = 'submit' value = 'valider' />

    </form>



</body>
</html>n 