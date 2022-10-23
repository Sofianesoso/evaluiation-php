<?php
require_once ('request.php'); 
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


<h1> Mes livres préféré </h1> 



<form  method = "get"> 
       <input type ="search" name="s" placeholder = "rechercher" >
       <input type = "submit" name="valider">

</form>-->
<section class="afficherLivre"> 


    <table>
        
        <?php
            if ($allLivre->rowCount() > 0){
                foreach($allLivre->fetchAll() as $livres){
        ?>

                <tr>
                    <td><?php echo $livres['titre'] ; ?></td>
                    <td><?php echo $livres['synopsis'] ; ?></td>
                    <td><?php echo $livres['Auteur'] ; ?></td>
                    

                </tr>
        <?php
            }
        ?>
    </table>

            <?php
        

        }else {
            ?>
            <p>Aucun livre trouvé</p>
            <?php
            }

             ?>
        <?php
            ;
        ?>

</section>

  
</body>
</html>