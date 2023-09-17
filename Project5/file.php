<?php

$sizeV = null;
if (!empty($_FILES['filef']) ){
    $sizeV = $_FILES['filef']['size'] ;
}

?>

<?php if(!empty($sizeV!=null && $sizeV<=200000)  ) : ?>
    <h2> <?=  $_FILES['filef']['size'] ?> </h2>
    <h2> <?= "le nom de fichier   :".$_FILES['filef']['name'] ?> </h2>
    <h2> <?= "Format  :".$_FILES['filef']['type'] ?> </h2>

<?php else :?>

<form enctype="multipart/form-data" method="post">
    <label for="filef">upload file</label>
    <input type="file" name="filef" id="filef">
    <br>
    <input type="submit" value="submit" name="sub">
</form>

<?php endif ?>

