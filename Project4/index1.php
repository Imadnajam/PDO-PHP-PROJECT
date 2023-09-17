<?php
$ageV=null;
if(!empty($_GET['age'])){
    setcookie('client',$_GET['age']);
    $ageV=(int)date('Y')-(int)$_GET['age'] ;
}

?>

<?php if(!empty($_GET['age']) && $ageV>18) :?>
    <h1> <?=  $ageV ?></h1>
    <h1> vous etes adulte</h1>
<?php elseif(!empty($_GET['age']) && $ageV<18) :?>
    <h1> <?=  $ageV ?></h1>
    <h1> vous etes garçon</h1>
<form >
    <select name="age" >age
        <?php for( $i=1980 ;$i<2015;$i++) :?>
            <option value="<?=$i ?>" ><?=$i ?> </option>
        <?php endfor?>
    
    </select><br><br>
    <button type="submit" formmethod="$_POST"> submit</button>
</form>
<?php endif ?>