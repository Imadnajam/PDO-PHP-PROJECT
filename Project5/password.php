
<?php
if(!empty($_GET['pass'])){
    $passc= password_hash($_GET['pass'],PASSWORD_DEFAULT) ;
    echo "<h1> $passc </h1>";
    echo password_verify($_GET['pass'],$passc);
}

?>
<?php
// See the password_hash() example to see where this came from.
$hash = '$2y$07$BCryptRequires22Chrcte/VlQH0piJtjXl.0t1XkA8pw9dMXTpOq';

if (password_verify('rasmuslerdorf', $hash)) {
    echo 'Password is valid!';
} else {
    echo 'Invalid password.';
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
    <form action="" method="$_POST">
        password : <input type="password" name="pass" id="">
    </form>
</body>
</html>