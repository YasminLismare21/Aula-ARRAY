 <?php
       function cadastro (){
           if (ehPost()){
           $Nome = $_POST["Nome"]; 
           if (strlen(trim($Nome)) == 0) {
            $errors[] = "Você deve inserir seu nome.";
           }
           $Email = $_POST["Email"];
           if (strlen($_POST['Email']) == 0) {
           $errors[] = "Você deve inserir um e-mail.";
            }

           $Cpf = $_POST["Cpf"];
          $input['Cpf'] =
          filter_input(INPUT_POST, 'Cpf', FILTER_VALIDATE_INT);
          if ($input['Cpf'] == FALSE) {
          $errors[] = 'Informe um cpf valido.';
             }
 
           $Celular = $_POST["Celular"];
           $input['Celular'] =
          filter_input(INPUT_POST, 'Celular', FILTER_VALIDATE_INT);
          if ($input['Celular'] == FALSE) {
          $errors[] = 'Informe um Celular valido.';
          }
         
           
           $Senha = $_POST["Senha"];
           $input['Senha'] =
           filter_input(INPUT_POST, 'Senha', FILTER_VALIDATE_INT);
            if ($input['Senha'] == FALSE) {
            $errors[] = 'Informe um Senha valida.';
             }

           $Novasenha = $_POST["NovaSenha"];
          
            $input['NovaSenha'] =
            filter_input(INPUT_POST, 'NovaSenha', FILTER_VALIDATE_INT);
            if ($input['NovaSenha'] == FALSE) {
            $errors[] = 'Informe um Senha Nova valida.';
             }
             
            
           echo "Nome:$Nome <br>";
           echo "Email:$Email <br>";
           echo "Cpf:$Cpf <br>";
           echo "Celular:$Celular <br>";
           echo "Senha:$Senha <br>";
           echo "Nova Senha:$Novasenha <br>";
           
           //redirecionar("usuario/index");
          print_r($errors);
 
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
    