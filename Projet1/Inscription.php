

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
        <span><h2>Registration</h2></span>
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
                <label id="l2" for="Tel" >Phone Numbre :</label><br><br><input type="tel" placeholder="Entre your numbre" name="Tel"><br><br>
                <label id="l2" for="Confirm">Confirm password </label><br><br><input type="password" placeholder="confirm your password"   id="ps2"><br><br>
          
           
        </div>
        <br>
    
        <h2 id="h3">Gender :</h2>
        <div id="d4">
        <label for="Gender">
            <input type="radio" name="Gender" value="Home">Male<input type="radio" name="Gender" value="Femme">Female<input type="radio" name="Gender" value="outre">Prefer not to say
        </label>
        <br><br>
        <input id="b1" type="submit" value="Register" formmethod="$_POST" onclick="ValidMdp()">
    </div>
    </div>
    </form>
   

    <div class="add0">

<a href="Clients.php"> <svg viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M4.00151 4C4.00151 1.79086 5.79305 0 8.00302 0C10.213 0 12.0045 1.79086 12.0045 4C12.0045 6.20914 10.213 8 8.00302 8C6.94175 8 5.92395 7.57857 5.17352 6.82843C4.42309 6.07828 4.00151 5.06087 4.00151 4ZM15.896 14.55L14.4555 11.66C13.9465 10.6408 12.904 9.99776 11.7644 10H4.2416C3.10207 9.99776 2.05957 10.6408 1.55058 11.66L0.110037 14.55C-0.0459917 14.8595 -0.0305622 15.2277 0.150815 15.5231C0.332192 15.8185 0.653649 15.999 1.00037 16H15.0057C15.3524 15.999 15.6739 15.8185 15.8552 15.5231C16.0366 15.2277 16.052 14.8595 15.896 14.55Z" fill="#008080"/>
</svg></a>

</div>



    <script> 
            let ValidMdp=function(){
            var ps1=document.querySelector("#ps1").value;
            var ps2=document.querySelector("#ps2").value;

            if(ps1!=ps2){
                alert("le password pas correct!")
            }else{
                document.querySelector("form").setAttribute("action","Clients.php")
            }
        }
    </script>
    
</body>
</html>