<?php   


if(isset($_GET['numero1']) && isset ($_GET['numero2'])){
    $r = $_GET['numero1'] + $_GET ['numero2'];
    echo $r;
}else{
   // echo "Você previsa informar os valores para somar";
   header ("Location: form1.html");
}
?>