
<?php
include_once("Connexion.php");
if(empty($_GET['IdentifiantN'])){
    $cod="SELECT * FROM utilisateur WHERE Identifiant=:IdentifiantN ";
    $stmt=$pdo->prepare($cod);
    $stmt->execute(
        [
            'IdentifiantN'=>$_GET['IdentifiantN']
        ]
    );
    $rows=$stmt->fetch(PDO::FETCH_ASSOC);
    if($rows['Identifiant']==$_GET['IdentifiantN'] || $rows['mdp']==$_GET['password']){
        header('Location:menu.php');
    }else{
        header('Location:Login.php');
    }
}
?>
