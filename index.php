<?php
include('../includes/header.php');
//colocar script na linha abaixo
include('menu.php');
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $file=$id.".php";
    include($file);
    
}

else{
    echo "<h2>Selecione no menu de exibição o conteúdo desejado</h2>";
}







//não colocar script após a proxima linha
include('../includes/footer.php');