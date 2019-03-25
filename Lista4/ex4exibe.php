<?php
$num1= $_POST["num1"];
$num2= $_POST["num2"];

if($_POST["operation"]=="adi"){
    
    print "Resultado da soma: ".($num1+$num2);
}elseif($_POST["operation"]=="subt"){
    
    print "Resultado da subtração: ".($num1-$num2);
}elseif($_POST["operation"]=="multip"){
    
    print "Resultado da multiplicação: ".($num1*$num2);
}else{
    print "Resultado da divisão: ".($num1/$num2);
}
?>

