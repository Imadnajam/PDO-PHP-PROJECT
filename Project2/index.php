
<?php

if(!empty($_GET['jus'])){
    $host="localhost";
$dbname="bare";
$user="root";
$password="";
$dsn="mysql:host=".$host.";dbname=".$dbname;
$dbh=new PDO($dsn,$user,$password);
$nameCom=$_GET['jus'];
$dateCom=date("Y-m-d");
$codecom=$_GET['codecom'];

$stmt=$dbh->prepare("INSERT INTO command(codecom,nameCom,dateCom) VALUES (:codecom,:nameCom,:dateCom) ");
$stmt->execute([
    'codecom'=>$codecom,
    'nameCom'=>$nameCom,
    'dateCom'=>$dateCom,
]);

}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            color: white;
            background-color: rgb(28, 85, 50);
            font-family: Georgia, 'Times New Roman', Times, serif;
        }
        .container{
            margin-top: 10%;
            margin-left: 5%;
        }
        .container1{
            display: flex;
            gap: 40px;
        }
        .container2{
            display: flex;
            gap: 40px;
        }
        img {
            width: 200px;
            height: 250px;
        }
        #s{
            cursor: pointer;
            margin-left: 30%;
            width: 500px;
            height: 30px;
        }
    </style>
</head>
<body>
    
    <form action="" >
        <input type="number" placeholder="entrer votre code " name="codecom">
        <div class="container">
        <div class="container1">
            <img src="img1.jpg" ><div class="items1"><h3>Jus de pastèque <br>3$</h3><input type="radio" value="Jus de pastèque" name="jus">Add to cart</div>
            <img src="img2.jpg" ><div class="items2"><h3>Jus de Ananas <br>5$</h3><input type="radio" value="Jus de Ananas" name="jus">Add to cart</div>
            <img src="img 3.jpg" ><div class="items3"><h3>Jus de Kiwi <br>5$</h3><input type="radio" value="Jus de Kiwi" name="jus">Add to cart</div>
        </div><br><br>
        <div class="container2">
            <img src="img 4.jpg" ><div class="items4"><h3>Jus de canneberges <br>6$</h3><input type="radio" value="Jus de canneberges" name="jus">Add to cart</div>
            <img src="img 5.jpg" ><div class="items5"><h3>Jus de citron <br>4$</h3><input type="radio" value="Jus de citron" name="jus">Add to cart</div>
            <img src="img 6.jpg" ><div class="items6"><h3>Jus de peche <br>5$</h3><input type="radio" value="Jus de peche" name="jus">Add to cart</div>
        </div>
    </div><br><br>
    <input type="submit" value="submit"formmethod="$_POST" id="s">



    </form>
</body>
</html>