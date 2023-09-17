

<?php

include_once("Connexion.php");
$stmt= $pdo->query('SELECT * FROM utilisateur');

// cet code pour insérer les donnée dans une table : on va fait l' ensértion !
if(!empty($_GET['Identifiant'])){

    $Identifiant=$_GET['Identifiant'];
    $email=$_GET['email'];
    $mdp=$_GET['mdp'];
    // INSERT INTO `utilisateur`(`Identifiant`, `email`, `mdp`) VALUES ('[value-1]','[value-2]','[value-3]')

    $add="INSERT INTO utilisateur(Identifiant,email,mdp) VALUES(:Identifiant,:email,:mdp)";
    $stm=$pdo->prepare($add);
    $stm->execute(
        [
            'Identifiant'=>$Identifiant,
            'email'=>$email,
            'mdp'=>$mdp
        ]
        );
       
}




    
?>


<?php
include_once("Connexion.php");

$sql =  $pdo->query("SELECT * FROM utilisateur");
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
    background-image: url("img.jpg");
    background-position: center;
    
    color: white;
    
}
table{
    margin-left: 10%;
}
table th{
    border: 1px solid teal;
    color: teal;
}
table td{
    border: 1px solid teal;
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
    <th>Identifiant</th>
    <th>Email</th>
    <th>Password </th>
    
    <th>Add/Remove</th>
    </tr>
    <?php foreach  ($rows as $row) :?>
        <tr>
        <td><?= $row['Identifiant'] ?></td>
        <td><?= $row['email']?></td>
        <td><?= $row['mdp' ]?></td>
        
        <td>
            
           
                

<form action="SetClient.php" method="GET" >
    <input type="hidden" name="id" value="<?php echo $row['Identifiant']; ?>">
    <button type="submit" class="btn btn-danger">
    <svg width="42" height="43" viewBox="0 0 42 43" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M26.224 42.0799H14.7979C4.4573 42.0799 0.0392151 37.6618 0.0392151 27.3212V15.8951C0.0392151 5.5545 4.4573 1.13641 14.7979 1.13641H18.6066C19.3874 1.13641 20.0349 1.78389 20.0349 2.56467C20.0349 3.34546 19.3874 3.99294 18.6066 3.99294H14.7979C6.01887 3.99294 2.89574 7.11607 2.89574 15.8951V27.3212C2.89574 36.1002 6.01887 39.2234 14.7979 39.2234H26.224C35.003 39.2234 38.1262 36.1002 38.1262 27.3212V23.5125C38.1262 22.7317 38.7736 22.0842 39.5544 22.0842C40.3352 22.0842 40.9827 22.7317 40.9827 23.5125V27.3212C40.9827 37.6618 36.5646 42.0799 26.224 42.0799Z" fill="#008080"/>
<path d="M13.8445 32.4441C12.6828 32.4441 11.6164 32.0251 10.8356 31.2634C9.90249 30.3302 9.50257 28.9782 9.71205 27.5499L10.5309 21.8178C10.6833 20.7133 11.4069 19.285 12.1877 18.5042L27.1939 3.49791C30.9835 -0.291743 34.8303 -0.291743 38.62 3.49791C40.6957 5.57365 41.6288 7.68747 41.4384 9.8013C41.267 11.5152 40.3529 13.191 38.62 14.905L23.6137 29.9113C22.8329 30.6921 21.4047 31.4157 20.3001 31.5681L14.5681 32.3869C14.3206 32.4441 14.073 32.4441 13.8445 32.4441ZM29.2125 5.51652L14.2063 20.5229C13.8445 20.8847 13.4255 21.7226 13.3494 22.2177L12.5305 27.9498C12.4543 28.5021 12.5686 28.9591 12.8542 29.2448C13.1399 29.5304 13.5969 29.6447 14.1492 29.5685L19.8812 28.7496C20.3763 28.6735 21.2333 28.2545 21.576 27.8927L36.5823 12.8863C37.8201 11.6485 38.4676 10.544 38.5628 9.51565C38.6771 8.27782 38.0296 6.96382 36.5823 5.49748C33.5354 2.45052 31.4406 3.30748 29.2125 5.51652Z" fill="#008080"/>
<path d="M35.4593 17.4753C35.326 17.4753 35.1927 17.4562 35.0784 17.4182C30.07 16.0089 26.0899 12.0289 24.6807 7.02042C24.4712 6.25868 24.9092 5.47789 25.671 5.24937C26.4327 5.03989 27.2135 5.47789 27.423 6.23963C28.5656 10.2959 31.7839 13.5142 35.8402 14.6569C36.6019 14.8663 37.0399 15.6662 36.8304 16.4279C36.6591 17.0754 36.0878 17.4753 35.4593 17.4753Z" fill="#008080"/>
</svg>

</button>
</form>         


<form action="DeleteClient.php" method="GET" >
    <input type="hidden" name="id" value="<?php echo $row['Identifiant']; ?>">
    <button type="submit" class="btn btn-danger">
<svg width="16" height="20" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M16 2.5V3.5C16 3.77614 15.7761 4 15.5 4H0.5C0.223858 4 0 3.77614 0 3.5V2.5C0 2.22386 0.223858 2 0.5 2H5V1C5 0.447715 5.44772 0 6 0H10C10.5523 0 11 0.447715 11 1V2H15.5C15.7761 2 16 2.22386 16 2.5ZM1.87 18.14C1.94365 19.1896 2.81787 20.0026 3.87 20H12.15C13.2021 20.0026 14.0764 19.1896 14.15 18.14L15 6H1L1.87 18.14Z" fill="#008080"/>
</svg>
</button>
</form>

        


    
    </td>
    </tr>

<?php endforeach ?>
  
 </table>    
 </form>
 <div class="add">

<a href="Inscription.php"> <svg viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M4.00151 4C4.00151 1.79086 5.79305 0 8.00302 0C10.213 0 12.0045 1.79086 12.0045 4C12.0045 6.20914 10.213 8 8.00302 8C6.94175 8 5.92395 7.57857 5.17352 6.82843C4.42309 6.07828 4.00151 5.06087 4.00151 4ZM15.896 14.55L14.4555 11.66C13.9465 10.6408 12.904 9.99776 11.7644 10H4.2416C3.10207 9.99776 2.05957 10.6408 1.55058 11.66L0.110037 14.55C-0.0459917 14.8595 -0.0305622 15.2277 0.150815 15.5231C0.332192 15.8185 0.653649 15.999 1.00037 16H15.0057C15.3524 15.999 15.6739 15.8185 15.8552 15.5231C16.0366 15.2277 16.052 14.8595 15.896 14.55Z" fill="#008080"/>
</svg></a>

</div>

</body>
</html>