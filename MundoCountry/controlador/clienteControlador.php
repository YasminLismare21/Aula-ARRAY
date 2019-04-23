 <?php
       function cadastro (){
           if (ehPost()){
           $Nome = $_POST["Nome"];
           $Email = $_POST["Email"];
           $Cpf = $_POST["Cpf"];
           $Celular = $_POST["Celular"];
           $Sexo = $_POST["Sexo"];
           $Senha = $_POST["Senha"];
           $Novasenha = $_POST["NovaSenha"];
           
           
           //redirecionar("usuario/index");
           print_r($_POST);
           } else{
               
           exibir("cliente/cadastro");
           
           }
       }
       
       function contato (){
           if (ehPost()){
           $Nome = $_POST["Nome"];
           $Email = $_POST["Email"];
           $Cpf = $_POST["Cpf"];
           $Telefone = $_POST["Telefone"];
           $Mensagem = $_POST["Mensagem"];
           
           
           
           //redirecionar("usuario/index");
           print_r($_POST);
           } else{
               
           exibir("cliente/contato");
           
           }
       }
        ?>
    