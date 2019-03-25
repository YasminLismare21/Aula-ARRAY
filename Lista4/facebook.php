<html>
    <head>
        <meta charset="UTF-8">
        <title>lista post</title>
    </head>
    <body>
       
        <h1> Abra uma conta</h1>
        <p>É gratuito e sempre será. </p>
            <input type="text" name="nome" placeholder="Nome:">
            <input type="text" name="sobrenome" placeholder="Sobrenome:"><br><br>
            <input type="text" name="email" placeholder="E-mail ou número do celular:"><br><br>
            <input type="texto" name="email de confirmação" placeholder="Insira novamente o email ou o celular:"><br><br>
	    <input type="password" name="senha" placeholder="Nova Senha">  	
           
       </form>
   
            <h3>Aniversário</h3>
            
            
           <select>
            
               <option> Dia </option>
               
            <?php 
            for ($i=1; $i<=31; $i++){  
            ?>
            
            <option> <?php echo $i; ?> </option>
            
            <?php } ?>
            
        </select> 
        
            
            
            <select>   
                <option> Mês </option>
                    <?php
                $vetor_1 = array(
                    0=>Jan,
                    1=>Fev,
                    2=>Mar,
                    3=>Abr,
                    4=>Mai,
                    5=>Jun,
                    6=>Jul,
                    7=>Ago,
                    8=>Set,
                    9=>Out,
                    10=>Nov,
                    11=>Dez,
                );
                     for($i=0;$i<12;$i++){
                         
                    ?>  
                    <option>
                        <?php
                            echo $vetor_1[$i];
                        ?>
                 </option>
                     <?php } ?>
            </select>
            
        
                <select>
            
                    <option> Ano </option>
         
                    <?php 
                    for ($i=1994; $i<=2019; $i++){  
                     ?>
            
                <option> <?php echo $i; ?> </option>
            
                    <?php } ?>
            
                </select> 
            
        
        
        
   
            
            
            
            <a href="#">Por que preciso informar minha data de nascimento?</a><br>
                <br><input id="feminino" type="radio" name="senha">  <label for="feminino"> Feminino </label>
                <input id="masculino" type="radio" name="senha">  <label for="masculino"> Masculino </label>

                <p>Ao clicar em Inscreva-se, você concorda com nossos <a href="#"> Termos</a>, <a href="#"> Politica de Dados </a> 
                    e <a href="#"> Politica de Cookies. </a>
            Você pode receber notificações por SMS e pode cancelar isso quando quiser.</p>
             <input type="submit" name="enviar" value="Abrir uma Conta">



            

        
    </body>
</html>  
