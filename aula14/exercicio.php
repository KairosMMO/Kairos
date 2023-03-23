<?php   


if(isset($_POST['numero1']) && isset ($_POST['numero2'])){
    $r = $_POST['numero1'] + $_POST ['numero2'];
    echo $r;
}else{
   // echo "Você previsa informar os valores para somar";
   header ("Location: form1.html");
}
?>