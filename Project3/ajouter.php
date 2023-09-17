<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
   <style>
    body{
    background-image: linear-gradient(to right,teal,rgb(153, 0, 255));
}
.container {
    margin-top:10% ;
}
h1{
    text-decoration: underline white;
    color: white;
    margin-left: 10ch;
    
}
h1:hover{
    color: rgb(96, 248, 96);
    text-decoration: underline rgb(96, 248, 96);
}
   </style>
    
</head>
<body>
    <h1>Ajouter Client</h1>
    <div class="container justify-content-center" >
     <form action="ListerC.php">
    
    <div class="input-group">
        <div class="input-group-text">Nom</div>
        <input id="Nom" type="text" name="nom" class="form-control" placeholder="Entrer votre nom">
        <div class="input-group-text">Prenom</div>
        <input type="text" class="form-control" name="prenom" placeholder="Entrer votre prenom" >
    </div><br>

    <div class="input-group">
        <div class="input-group-text">idClient</div>
        <input id="Age" name="idClient" type="number" class="form-control" placeholder="Entrer votre id">
        <div class="input-group-text">cin</div>
        <input type="text" class="form-control" name="cin" placeholder="Entrer votre cin" >
    </div><br>
    
        
    <div class="form-floating">
        <input id="Email" type="email" name="email" placeholder="entrer votre email"class="form-control" >
        <label for="Email" class="form-control">Entrer Votre email</label>
        
    </div>
    <br>
    <div class="form-floating">
        <input id="password" type="password" name="passwordc" placeholder="entrer votre password"class="form-control" >
        <label for="password" class="form-control">Entrer Votre password</label>
        
    </div><br>
    <button class="btn bg-opacity-10 btn-primary" type="submit" formmethod="$_POST">submit</button>
    <button class="btn btn-outline-danger">reset</button>
     </form>
    </div>
    </div>









    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>