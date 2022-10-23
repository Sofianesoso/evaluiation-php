<?php
$db = new PDO('mysql:host=localhost;dbname=evaluationsql', 'root', 'root');



$allLivre = $db->query('SELECT * FROM Livre ORDER BY id DESC');
if (isset($_GET['s']) AND !empty($_GET ['s'])){
    $allLivre = $db->query('SELECT titre FROM Livre WHERE "%' .$recherche. '%"  ORDER BY id DESC');
} 
$allTitre = $db->query('SELECT titre FROM Livre ORDER BY id DESC');

?>





