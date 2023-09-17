<?php

include_once("Connexion.php");
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    
    $sql = "DELETE FROM utilisateur WHERE Identifiant=:id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        "id" => $id
    ]);
    
    
   
}
header("Location: Clients.php");
exit;
?>