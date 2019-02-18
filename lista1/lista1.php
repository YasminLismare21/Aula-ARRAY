<?php
    echo "Exercício 1<br>";
    $i1=10;
    $i2=4;
    $i3=8;
    $i4=6;

    $media= ($i1+$i2+$i3+$i4)/4;
    if($media>=6){
        echo"aprovado<br>";
    }else{
        echo"reprovado<br>";
    }
    
    echo "Exercício 2<br>";
    
    $salario=1200;
    if($salario<=1000){
        $bonus=$salario*0.4;
        }else{
            $bonus=$salario*0.3;
 echo"salario<br>";     
echo "$bonus+$salario";

        
    }
echo "<br>";
        
        
     echo "<br>Exercício 3<br>";
     $media=7.5;
     $freq=0.75;
     
     if(($media>=6)&&($freq>=0.75)){
         echo "aprovado";
     }else{
         echo"reprovado";
     }
     
     echo "<br>";
     
     echo "<br>Exercício 4<br>";
     
     for($i=0; $i<=100;$i++){
         if($i %2==0){
             echo $i ."<br>";
         }
     }
        echo "<br>";
     echo "<br>Exercício 5<br>";
     
     $n1=25;
     $n2=66;
     
     if($n1>$n2){
         echo $n1 ." É maior";
     }else{
         echo $n2 ." É maior";
     }
        echo "<br>";
     
     echo "<br>Exercício 6<br>";
     
     $n1=55;
     $n2=10;;
     $n3=53;
     
      if(($n1>$n2) &&($n1>$n3)){
         echo $n1 ." É maior";
     }else{ 
         if(($n2>$n1) &&($n2>$n3)){
         echo $n2 ." É maior";
     }else{
         echo $n3 ." É maior";
     }  
     
     } 
         echo "<br>";    
             
     echo "<br>Exercício 7<br>";
        
     $num1=20;
     $num2=45;
    
      if($num1 == $num2){
         echo $num1 ." É igual". $num2;
     }else{ 
         if($num1>$num2){
         echo $num1 ." É maior";
     }else{
         echo $num2 ." É maior";
     }  
     
     } 
     echo "<br>";
     
     echo "<br>Exercício 8<br>";
     
        $idade=24;
     
     if (($idade<18) or ($idade>60)){
         echo "Pagar: Meia";
     }else{
         echo "Pagar: Inteira"; 
     }
     
     echo "<br>";

     
     echo "<br>Exercício 9<br>";
     
         for($j=1;$j<=10;$j++){
      echo "Tabuada do ".$j."<br>";
    for($i=1;$i<=10;$i++){
       print $j." x ".$i." = ".($j*$i)."<br>";
    }
    echo "<br>";
    } 
