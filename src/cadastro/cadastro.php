<?php
    require_once("../funcao/conexao.php");

    ob_start();
    session_start();

    if(isset($_POST["envioFabricaCadastro"])):
        $Erros = array();
        
            $Nome = filter_input(INPUT_POST, "nomeCadastro", FILTER_SANITIZE_STRING);
            $Senha = mysqli_escape_string($Conex,$_POST["senhaCadastro"]);
            $ConfirmaSenha = mysqli_escape_string($Conex, $_POST["confirmaSenhaCadastro"]);
            $CNPJ = filter_input(INPUT_POST, "cnpjCadastro", FILTER_SANITIZE_STRING);
            $Email = filter_input(INPUT_POST, "emailCadastro",FILTER_SANITIZE_EMAIL);
            $TelContato = filter_input(INPUT_POST,"telCadastro",FILTER_SANITIZE_STRING);
            


            $ComandoSQL = "SELECT cnpj FROM fabrecicladora WHERE cnpj = '$CNPJ'";

            $Resultado = mysqli_query($Conex, $ComandoSQL);

            if(mysqli_num_rows($Resultado) <= 0):

                if($Senha == $ConfirmaSenha):
                    $Senha = password_hash($Senha, PASSWORD_DEFAULT);
                    
                    $ComandoSQL = "INSERT INTO fabrecicladora(Cnpj, Nome, email, Cep, Tel,Senha) VALUES('$CNPJ', '$Nome', '$Email','$CEP','$TelContato','$Senha')";
        
                    $Resultado = mysqli_query($Conex, $ComandoSQL);

                    $ComandoSQL = "SELECT * FROM fabrecicladora where Cnpj = '$CNPJ' and Senha = '$Senha'";

                    $Resultado = mysqli_query($Conex,$ComandoSQL);
        
                    $Dados = mysqli_fetch_array($Resultado);
        
                    $_SESSION["logado"] = true;
        
                    $_SESSION["id_usuario"] = $Dados["Cnpj"];
        
                    header('location: ../Painel/painelFabrica.php');
                else:
                    $Erros[] = "<li> Confirmação de senha não coincide com a senha </li>";
                    header("location: ../inicial/Entrar_Cadastrar.php");
                endif;
            else:
                $Erros[] = "<li> Email já cadastrado. </li>";
                header("location: ../inicial/Entrar_Cadastrar.php");
            endif;
        
    elseif (isset($_POST["envioAdmKlabinCadastro"])):
        
            $Nome = filter_input(INPUT_POST, "nomeCadastro", FILTER_SANITIZE_STRING);
            $CPF = filter_input(INPUT_POST, "cpfCadastro", FILTER_SANITIZE_NUMBER_INT);
            $Senha = mysqli_escape_string($Conex,$_POST["senhaCadastro"]);
            $ConfirmaSenha = mysqli_escape_string($Conex, $_POST["confirmaSenhaCadastro"]);
            $TokenValidacao = filter_input(INPUT_POST, "tokenValidacaoCadastro", FILTER_SANITIZE_NUMBER_INT);

            $ComandoSQL = "SELECT Cpf FROM admklabin WHERE Cpf = '$CPF'";

            $Resultado = mysqli_query($Conex, $ComandoSQL);

            if(mysqli_num_rows($Resultado) <= 0):

                if($Senha == $ConfirmaSenha):

                    $Senha = password_hash($Senha, PASSWORD_DEFAULT);
                    
                    $ComandoSQL = "INSERT INTO admklabin(Cpf,Nome,Senha,TokenValidacaoAdm) VALUES('$CPF','$Nome','$Senha','$TokenValidacao')";
        
                    $Resultado = mysqli_query($Conex, $ComandoSQL);

                    $ComandoSQL = "SELECT * FROM admKlabin where Cpf = '$CPF' and Senha = '$Senha'";

                    $Resultado = mysqli_query($Conex,$ComandoSQL);
        
                    $Dados = mysqli_fetch_array($Resultado);
        
                    $_SESSION["logado"] = true;
        
                    $_SESSION["id_usuario"] = $Dados["Cpf"];
        
                    header('location: ../Painel/painelAdmKlabin.php');
                else:
                    $Erros[] = "<li> Confirmação de senha não coincide com a senha </li>";
                    header("location: ../inicial/Entrar_Cadastrar.php");
                endif;

            else:
                $Erros = "<li> CPF já cadastrado </li>";
                header("location: ../inicial/Entrar_Cadastrar.php");
            endif;
        
        
        

    endif;
?>