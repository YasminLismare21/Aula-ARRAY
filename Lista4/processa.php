 <?php

 $valores= array(
     0=> $_POST["num1"],
     1=> $_POST["num2"],
     2=> $_POST["num3"],
     3=> $_POST["num4"],
     4=> $_POST["num5"],
 );
 
 $maior=0;
 
 for($i=0;$i<count($valores);$i++){
     if ($valores[$i] > $maior){
        $maior = $valores[$i];
        
        
    }
 }
 
 echo "O maior número é: " .$maior ."<br>";
 
 for($i=0;$i<count($valores);$i++){
     if ($valores[$i] % 2 == 0){
         echo  $valores[$i]. " é par!" ."<br>";
     }
 }
 ?>
