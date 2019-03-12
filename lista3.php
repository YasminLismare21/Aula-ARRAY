<html>
    <head>
        <meta charset="UTF-8">
        <title>Lista de Funções </title>
    </head>
    <body>
        <?php
        echo  " Exercício 1 <br> " ;
        $num=997;
        function NumeroPrimo ($num){
        $count=0;
        for($i=1;$i<=$num;$i++){
           if($num % $i==0) {
               $count=$count+1;
           }
        }
           if($count==2){
               echo " O Número é Primo ";
           } else {
               echo" O Número é composto Composto ";
           }
        }             
       NumeroPrimo ($num);         
          
       
        echo  "<br> Exercício 2 <br> " ;
       

    function primo($num) {
                $cont=0;  
                
                for ($i=1; $i<=$num; $i++){
                    if ($num%$i==0){
                        $cont++;
                   }
                }
                
                if ($cont == 2){
                    echo "<p>O número $num é Primo</p>";
                } else {
                    echo "<p>O número $num não é Primo</p>";
                }
    }
    
    for ($i=1; $i<=100; $i++){
      primo ($i);  
    }
?>
       ?>
        <ul>
            <?php

             echo  "<br> Exercício 3 <br> " ;

             $color = array(
                 'blue',
                 'Yellow',
                 'Red',
                 'White',
                 'Black',
                 'Brown',
                 'Green',
                 'Gray',
                 'Purple',
                 'Pink',
                 );
                 function Cores ($color){

                     for($i=0;$i<count($color);$i++){
            ?>
            <li>
            <?php
                echo $color[$i];  
            ?>           
            </li>

             <?php
                     }

                 }
                 Cores($color);

             ?>
        </ul>
    </body>
</html>