<?php
if(!empty($_GET['action']) && $_GET['action']==="deconecter"){
    unset($_COOKIE['client']);
    setcookie('client','');
};

if(!empty($_GET['nom'])){
   setcookie('client',$_GET['nom']); 

}





?>
<?php if( $_GET['nom']) :?>
    <h1><?= $_COOKIE['client'] ?></h1>

<?php else :?>

<form >
    <input type="text" name="nom">
    <button type="submit" formmethod="$_POST">envoie</button>
</form>

<?php endif?>
<a href="index.php?action=deconecter">deconecter</a>