
        <?php
       function visualizar (){
       $visualizardados = array();
       $visualizardados ["Produto"] = "Calça Jeans Bordada";
       $visualizardados["Descrição"] = "Calça Jeans com barra bordada, do número 36 ao 48, modelo Flare, marca Minuty.";
       $visualizardados ["Preço"] = "210,00";
       
       exibir("produto/visualizar",$visualizardados);
       }
       
       function adicionar (){
           if (ehPost()){
           $Código = $_POST["Código"];
           $Categoria = $_POST["Categoria"];
           $Nome = $_POST["Nome"];
           $Preço = $_POST["Preço"];
           $Descrição = $_POST["Descrição"];
           
           $input['Codigo'] =
            filter_input(INPUT_POST, 'Codigo', FILTER_VALIDATE_INT);
            if ($input['Codigo'] == FALSE) {
            $errors[] = 'Informe um Código valido.';
            }
           
            if (strlen(trim($_POST['Categoria'])) == 0) {
            $errors[] = "Você deve inserir uma Categoria.";
             }
             
           if (strlen(trim($_POST['Nome'])) == 0) {
            $errors[] = "Você deve inserir um Nome.";
                }
                
            $input['Preço'] =
            filter_input(INPUT_POST, 'Preço', FILTER_VALIDATE_INT);
            if ($input['ano'] == FALSE) {
            $errors[] = 'Informe um Preço valido.';
             }
             
             if (strlen(trim($_POST['Descrição'])) == 0) {
            $errors[] = "Você deve inserir uma Descrição válida.";
            }


  

            


           
           //redirecionar("usuario/index");
            print_r($_POST);
           } else{
               
           exibir("produto/formulario");
           
           }
       }
    