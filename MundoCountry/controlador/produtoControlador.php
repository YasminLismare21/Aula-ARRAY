
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
           $Foto = $_POST["Foto"];
           $Código = $_POST["Código"];
           $Categoria = $_POST["Categoria"];
           $Nome = $_POST["Nome"];
           $Preço = $_POST["Preço"];
           $Descrição = $_POST["Descrição"];
           
           redirecionar("usuario/index");
           } else{
               
           exibir("usuario/formulario");
           
           }
       }
    