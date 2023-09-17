<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-image: linear-gradient(to right, teal, rgb(153, 0, 255));
            font-size: x-large;
            color: rgb(255, 255, 255);
            font-family: monospace;
        }

        a {
            text-decoration: none;
            color: white;
        }

        .containere {
            background-color: rgba(0, 0, 0, 0.493);
            width: 600px;
            height: 55vh;
            text-align: center;
            display: flex;
            justify-content: space-around;
            

            margin-left: 25%;
        }

        #in {
            background-color: rgba(19, 8, 36, 0.493);
            color: white;
            font-size: 1.2rem;
            width: 10cm;
            height: 50px;
        }

        button {
            background-color: rgba(19, 8, 36, 0.493);
            color: white;
            font-size: 1.2rem;
            width: 5cm;
            height: 50px;
            cursor: pointer;
        }

        h3 {
            font-size: 2.5rem;

            text-shadow: 0px 0px 5px, 20px 15px 10px rgba(19, 8, 36, 0.493);
        }

 
    </style>
</head>

<body>
    <h3>Date Verif</h3>
    <div class="containere">
        <form><br><br><br>
        <label for="datD">
            Date debut
            <input id="in" type="date" name="datD">
        </label><br><br><br>
        <label for="datF">
            Date Fine
            <input id="in" type="date" name="datF">
        </label>
            <br><br><br>
            <button formmethod="$_POST">submit</button>
        </form>
    </div>

</body>

</html>

<?php

$user="root";
$password="";
$dsn='mysql:host=localhost;dbname=locationimmobiliere';
$pdo=new PDO($dsn,$user,$password);


if (!empty($_GET['datD'])){
    $sql="SELECT * FROM `location` WHERE `dateDebutLocation` BETWEEN  :datD and :datF ";
    $stmt =$pdo->prepare($sql);
    $stmt->execute([
        'datD'=>$_GET['datD'],
        'datF'=>$_GET['datF']
    ]);
    $rows=$stmt->fetchAll(PDO::FETCH_ASSOC);




}
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
    <?php  foreach($rows as $row) :?>
    <ul>
        <li><?= $row['idLocation'] ?></li>
        <li><?= $row['dateDebutLocation'] ?></li>
        <li><?= $row['dateFinLocation'] ?></li>
        <li><?= $row['idImmobilier'] ?></li>
        <li><?= $row['idClient'] ?></li>
    
    </ul>
    <?php endforeach ?>

</body>
</html>