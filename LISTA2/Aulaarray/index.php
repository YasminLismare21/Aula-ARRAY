<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Lista Web2 Vetores</title>
    </head>
    <body>
        
   
    <?php
      echo"1º Exercício<br>";
      
      $Vetor_1 = array();
      for ($i=0; $i < 50; $i++){
       $Vetor_1 [$i]=42;
          //echo "Índices: ". $i . " Valor: " .$vetor_1[$i] ." <br>";
        }
      echo"<pre>";
      print_r($Vetor_1);
      echo"</pre>";
      
      echo"2º Exercício<br>";
      
      $vetor_2 = array();
            for ($i=0; $i < 50 ; $i++){
             $Vetor_2 [$i]= $i+1;  
       }
       echo"<pre>";
       print_r($Vetor_2);
       echo"</pre>";
      
      echo"3ºExercício<br>";
      
      $Vetor_3 = array();
      $maior = 0;
      $menor = 0;
      $soma = 0;
            for ($i=0; $i<30; $i++){
            $Vetor_3 [$i] = $i;
            if($Vetor_3[$i] > $maior){
              $maior = $Vetor_3 [$i];
              $posicao = $i;
            }
            $soma= $Vetor_3[$i]+$soma;
            $media=$soma/count ($Vetor_3);       
            }
    echo"Maior: ".$maior. "<br>";
    echo"Posição: ".$posicao. "<br>";
    echo"Soma:".$soma. "<br>";
    echo"Média:".$media. "<br>";
    
        echo"4ºExercício<br>";
        
        $vetor_4 = array();
            for($i=0; $i < 50; $i++){
                $vetor_4 [$i]= ($i+1)*2;
            }
        echo"<pre>";
        print_r($vetor_4);
        echo"</pre>";
        
       echo"5ºExercício<br>";      
       ?>
   
        <select>
        <?php
        $Vetor_5 = array(
        0=>"Times",
        1=>"Barcelona",
        2=>"Real Madrid",
        3=>"Manchester City",
        4=>"Juventus",
        5=>"Paris Saint-Germain",
        6=>"Live4pool",
        7=>"Atlético de Madrid",
        8=>"Manchester United",
        9=>"Chelsea"
        );
            for($i=0;$i<10;$i++){
        ?>
            <option>
        <?php
            echo $Vetor_5[$i];
        ?>    
            </option>
            <?php
            }
            ?>
        </select>
        
 </body>        
</html>
