<?php
    



include_once("Connexion.php");

if(!empty($_GET['id'])){
    $id = $_GET['id'];
    $sql="SELECT * FROM utilisateur WHERE Identifiant=:id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        "id"=>$id
    ]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
};
if(!empty($_GET['email'])){
    $Identifiant=$_GET['Identifiant'];
    $email=$_GET['email'];
    $mdp=$_GET['mdp'];
    $id1=$_GET['id1'];
    $sql=("UPDATE utilisateur SET Identifiant=:Identifiant ,email=:email,mdp=:mdp WHERE mdp=:id1");
    $stmt=$pdo->prepare($sql);
    $stmt->execute(
[
    "Identifiant"=>$Identifiant,
    "email"=>$email,
    "mdp"=>$mdp,
    "id1"=>$id1
]
);
}
?>








<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stule.css">
    <title>Inscription</title>
    <style>
         body{ 
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    background-color: teal;

    
 }

  
 #d1{
    text-align: center;
    position: absolute;
    top: 6ch;
    right: 25ch;
    left: 25ch;
    background-color: rgb(255, 255, 255);
   padding-right:  5em;
   padding-top: 34em;
   padding-left: 5em;
}
span{
    position: absolute;
    top: 0em;
    right: 80%;
    text-decoration: underline;
    text-decoration-color: teal;
    
}

#d2{
    position: absolute;
    top: 22%;
    left: 4%;
}
#d3{
    position: absolute;
    top: 22%;
    right:15em;
}
#l1{
    position: absolute;
    left: 0em;
}
#l2{
    position: absolute;
    left: 0em;
}
input{ padding-top: 8%;
    padding-right :85%;
    text-align:left;
    border: none;
    border-bottom: teal  solid;
    
    
}
 #h3{
    position: absolute;
    right: 85%;
    top: 16em;
    
}
#d4{
    position: absolute;
    top: 28em;
    left: 1em;
    

}

#b1{
    
    position: absolute;
    top: 3.5rem;
    left: 5rem;
    padding: 3%;
    padding-right: 100%;
    padding-left: 100%;
    
    color: rgb(255, 255, 255);
    background-color: teal;
    border-color: white;
    cursor: pointer;
    

}


label{
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    text-decoration: dotted;
    color: rgb(0, 0, 0);
    font-size: 2ch;
    
    
}

    </style>
</head>








<body>
    <form>
    <div id="d1">
        <span><h2>Set Client</h2></span>
        <div id="d2">
            
                <label id="l1" for="Identifiant">identifiant :</label><br><br>
                    <input type="number" placeholder="Entrer your identifiant " required name="Identifiant">
                  <br><br>
                <label id="l1" for="Email">Email :</label><br><br>
                    <input type="email" placeholder="Entrer your email " name="email"  required>
                <br><br>
                <label id="l1" for="password">password :</label><br><br>
                    <input type="password" name="mdp" id="ps1" required>
                <br><br>
       
        </div>
        <div id="d3">
            
                <label id="l2" for="adresse">Adresse   :</label><br><br> <input type="text" placeholder="Entre your adresse" name="adresse"><br><br>
                <label id="l2" for="Tel" >Phone Numbre :</label><br><br> <input type="hidden" name="id1" value="<?php echo $row['mdp']; ?>"><br><br>
                <label id="l2" for="Confirm">Confirm password </label><br><br><input type="password" placeholder="confirm your password"   id="ps2"><br><br>
          
           
        </div>
        <br>
    
        <h2 id="h3">Gender :</h2>
        <div id="d4">
        <label for="Gender">
            <input type="radio" name="Gender" value="Home">Male<input type="radio" name="Gender" value="Femme">Female<input type="radio" name="Gender" value="outre">Prefer not to say
        </label>
        <br><br>
        <input id="b1" type="submit" value="Register" formmethod="$_POST">
    </div>
    </div>
    </form>
   


</div>

   
    
</body>
</html>