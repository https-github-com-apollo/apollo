<?php
    require_once("conexao.php");

    ob_start();
    session_start();
    
    if(isset($_POST["envioLogin"])):

        $Erros = array();

        $ID = filter_input(INPUT_POST,"cnpjCpfEntrar", FILTER_SANITIZE_NUMBER_INT);

        $Senha = mysqli_escape_string($Conex, $_POST["senhaEntrar"]);

        if(strlen($ID) == 14):
            $ComandoSQL = "Select Cnpj FROM fabrecicladora where Cnpj = '$ID'";
    
            $Resultado = mysqli_query($Conex, $ComandoSQL);

            if(mysqli_num_rows($Resultado) >= 0):
                $ComandoSQL = "Select Senha FROM fabrecicladora where Cnpj = '$ID'";
    
                $SenhaCripta = mysqli_query($Conex, $ComandoSQL);
    
                $Dados = mysqli_fetch_array($SenhaCripta);
    
                if(password_verify($Senha, $Dados["Senha"]) == true):
    
                    $ComandoSQL = "SELECT * FROM fabrecicladora WHERE Cnpj = '$ID'";
    
                    $Resultado = mysqli_query($Conex, $ComandoSQL);
    
                    $Dados = mysqli_fetch_array($Resultado);
    
                    $_SESSION["logado"] = true;
    
                    $_SESSION["id_usuario"] = $Dados["Cnpj"];
    
                    header('location: painelFabrica.php');
                else:
                    $Erros[] = "<li> Senha incorreta </li>";
                    header("location: Entrar_Cadastrar.php");
                endif;
            else:
                $Erros[] = "<li> Email incorreto ou inexistente </li>";
                header("location: Entrar_Cadastrar.php");
            endif;

        elseif(strlen($ID) == 11):
            $ComandoSQL = "Select Cpf FROM admklabin where Cpf = '$ID'";
    
            $Resultado = mysqli_query($Conex, $ComandoSQL);

            if(mysqli_num_rows($Resultado) >= 0):
                $ComandoSQL = "Select Senha FROM admklabin where Cpf = '$ID'";
    
                $Resultado = mysqli_query($Conex, $ComandoSQL);
    
                $Dados = mysqli_fetch_array($Resultado);
    
                if(password_verify($Senha, $Dados["Senha"]) == true):
    
                    $ComandoSQL = "SELECT * FROM admklabin WHERE Cpf = '$ID'";
    
                    $Resultado = mysqli_query($Conex, $ComandoSQL);
    
                    $Dados = mysqli_fetch_array($Resultado);
    
                    $_SESSION["logado"] = true;
    
                    $_SESSION["id_usuario"] = $Dados["Cpf"];
    
                    header('location: painelAdmKlabin.php');
                else:
                    $Erros[] = "<li> Senha incorreta </li>";
                    header("location: Entrar_Cadastrar.php");
                endif;
            else:
                $Erros[] = "<li> Email incorreto ou inexistente </li>";
                header("location: Entrar_Cadastrar.php");
            endif;

        endif;
        
    endif;
?>