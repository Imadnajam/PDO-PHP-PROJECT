
<?php
$user="root";
$password="";
$dsn='mysql:host=localhost;dbname=locationimmobiliere';
$pdo=new PDO($dsn,$user,$password);
if(!empty($_GET['idC'])){
    $cod="SELECT * FROM client WHERE passwordc=:idC ";
    $stmt=$pdo->prepare($cod);
    $stmt->execute(
        [
            'idC'=>$_GET['idC']
        ]
    );
    $rows=$stmt->fetch(PDO::FETCH_ASSOC);
    if($rows['email']==$_GET['emailV'] and password_verify($rows['passwordc'],password_hash($_GET['idC'] ,PASSWORD_DEFAULT) )  ) {
       header('Location:ListerC.php');;
    }else{
        header('Location:ajouter.php');
    }
}
?>

<?php
$user="root";
$password="";
$dsn='mysql:host=localhost;dbname=locationimmobiliere';
$pdo=new PDO($dsn,$user,$password);
$stmt= $pdo->query('SELECT * FROM  location ');
$ver ="SELECT * FROM client where passwordc=:idC";
$sql=$pdo->prepare($ver);
$sql->execute([
      'idC'=>$_GET['idC']
]);


$rows1=$stmt->fetchAll(PDO::FETCH_ASSOC) ;
$rows=$sql->fetchAll(PDO::FETCH_ASSOC) ;

foreach ($rows1 as $row1)
foreach($rows as $rows2)


if($rows2['idClient']==$row1['idClient']){
    echo "le Nom est :".$rows2['nom']."<br>";
    echo "le prenom est :".$rows2['prenom']."<br>" ;
    echo "idClient  : " .$rows2['idClient'] ."<br>";
    echo "dateDebutLocation  : " .$row1['dateDebutLocation'] ."<br>";
    echo "dateFinLocation  : " .$row1['dateFinLocation'] ."<br> <br> <br>";

}





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Clients</title>
    <style>
        body{
         
    background-image: linear-gradient(to right,teal,rgb(153, 0, 255));
    color: white;
    

    
}
table{
    margin-left: 10%;
}
table th{
    border: 1px solid wheat;
    color: whitesmoke;
}
table td{
    border: 1px solid wheat;
    font-size: 3.5ch;
}
th{
    font-size: 5ch;
}
.add{
    width: 100px;
    height: 100px;
    border-radius: 50%;
    background-color: white;
    justify-content: center;
    text-align: center;
    cursor: pointer;

}
.add svg{
    margin-top: 25%;
}
svg{
    width: 40px;
    height: 50px;
}
button{
 background-color: transparent;
 border: none;
 cursor: pointer;
}
    

    </style>
</head>


<body>



</body>
</html>

<?php
$user="root";
$password="";
$dsn='mysql:host=localhost;dbname=locationimmobiliere';
$pdo=new PDO($dsn,$user,$password);

if(!empty($_GET['id'])){
    $id=$_GET['id'];
    $del='DELETE FROM `client` WHERE idClient=:id';
    $stm=$pdo->prepare($del);
    $stm->execute([
        'id'=>$id
    ]);
}




?>
