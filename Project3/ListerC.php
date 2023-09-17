

<?php
$user="root";
$password="";
$dsn='mysql:host=localhost;dbname=locationimmobiliere';
$pdo=new PDO($dsn,$user,$password);

$stmt= $pdo->query('SELECT * FROM client');

// cet code pour insérer les donnée dans une table : on va fait l' ensértion !
if(!empty($_GET['idClient'])){

    $idClient=$_GET['idClient'];
    $cin=$_GET['cin'];
    $nom=$_GET['nom'];
    $prenom=$_GET['prenom'];
    $email=$_GET['email'];
    $passwordc=$_GET['passwordc'];
    // INSERT INTO `client`(`idClient`, `cin`, `nom`, `prenom`, `email`, `passwordc`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]')

    $add="INSERT INTO client(idClient,cin,nom,prenom,email,passwordc)
     VALUES(:idClient,:cin,:nom,:prenom,:email,:passwordc)";
    $stm=$pdo->prepare($add);
    $stm->execute(
        [
            'idClient'=>$idClient,
            'cin'=>$cin,
            'nom'=>$nom,
            'prenom'=>$prenom,
            'email'=>$email,
            'passwordc'=>$passwordc
        ]
        );
       
}




    
?>


<?php
$user="root";
$password="";
$dsn='mysql:host=localhost;dbname=locationimmobiliere';
$pdo=new PDO($dsn,$user,$password);


$sql =  $pdo->query("SELECT * FROM client");
$rows=$sql->fetchAll(PDO::FETCH_ASSOC) ;




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
<form action="">
 <table >
    <tr>
    <th>idClient</th>
    <th>cin</th>
    <th>nom </th>
    <th>prenom </th>
    <th>email </th>
    <th>Password </th>
    
    <th>Add/Remove</th>
    </tr>
    <?php foreach  ($rows as $row) :?>
        <tr>
        <td><?= $row['idClient'] ?></td>
        <td><?= $row['cin']?></td>
        <td><?= $row['nom' ]?></td>
        <td><?= $row['prenom']?></td>
        <td><?= $row['email' ]?></td>
        <td><?= $row['passwordc' ]?></td>
        <td>
            
           
                



<form method="GET" >
    <input type="hidden" name="id" value="<?php echo $row['idClient']; ?>">
    <button type="submit" class="btn btn-danger">
<svg width="16" height="20" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M16 2.5V3.5C16 3.77614 15.7761 4 15.5 4H0.5C0.223858 4 0 3.77614 0 3.5V2.5C0 2.22386 0.223858 2 0.5 2H5V1C5 0.447715 5.44772 0 6 0H10C10.5523 0 11 0.447715 11 1V2H15.5C15.7761 2 16 2.22386 16 2.5ZM1.87 18.14C1.94365 19.1896 2.81787 20.0026 3.87 20H12.15C13.2021 20.0026 14.0764 19.1896 14.15 18.14L15 6H1L1.87 18.14Z" fill="white"/>
</svg>
</button>
</form>

        


    
    </td>
    </tr>

<?php endforeach ?>
  
 </table>    
 </form>
 <div class="add">

<a href="ajouter.php"> <svg viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M4.00151 4C4.00151 1.79086 5.79305 0 8.00302 0C10.213 0 12.0045 1.79086 12.0045 4C12.0045 6.20914 10.213 8 8.00302 8C6.94175 8 5.92395 7.57857 5.17352 6.82843C4.42309 6.07828 4.00151 5.06087 4.00151 4ZM15.896 14.55L14.4555 11.66C13.9465 10.6408 12.904 9.99776 11.7644 10H4.2416C3.10207 9.99776 2.05957 10.6408 1.55058 11.66L0.110037 14.55C-0.0459917 14.8595 -0.0305622 15.2277 0.150815 15.5231C0.332192 15.8185 0.653649 15.999 1.00037 16H15.0057C15.3524 15.999 15.6739 15.8185 15.8552 15.5231C16.0366 15.2277 16.052 14.8595 15.896 14.55Z" fill="rgb(153, 0, 255)"/>
</svg></a>

</div>

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
