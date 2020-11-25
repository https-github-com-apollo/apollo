<?php
    require_once("../funcao/conexao.php");

    session_start();

    $id = $_SESSION["id_usuario"];

    $ComandoSQL = "SELECT * FROM admklabin WHERE Cpf = '$id'";

    $Resultado = mysqli_query($Conex, $ComandoSQL);

    $Dados = mysqli_fetch_array($Resultado);
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
  <!-- Site made with Mobirise Website Builder v5.1.4, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta lang="pt-br">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v5.1.4, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="../assets/images/logo.png" type="image/x-icon">
  <meta name="description" content="">
  
  
  <title>Painel de controle</title>
  <link rel="stylesheet" href="../assets/web/assets/mobirise-icons2/mobirise2.css">
  <link rel="stylesheet" href="../assets/web/assets/mobirise-icons-bold/mobirise-icons-bold.css">
  <link rel="stylesheet" href="../assets/tether/tether.min.css">
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="../assets/dropdown/css/style.css">
  <link rel="stylesheet" href="../assets/animatecss/animate.css">
  <link rel="stylesheet" href="../assets/socicon/css/styles.css">
  <link rel="stylesheet" href="../assets/theme/css/style.css">
  <link rel="preload" as="style" href="../assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="../assets/mobirise/css/mbr-additional.css" type="text/css">
</head>
<body>
<section class="menu menu1 cid-sd2hsjFLPI" once="menu" id="menu1-l">
    

    <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
        <div class="container">
            <div class="navbar-brand">
                
                <span class="navbar-caption-wrap"><a class="navbar-caption text-info display-7" href="../inicial/index.php">SuperCycle ID</a></span>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true"><li class="nav-item"><a class="nav-link link text-info text-primary display-4" href="../inicial/index.php#Sobre">Sobre</a></li>
                    <li class="nav-item"><a class="nav-link link text-info text-primary display-4" href="../inicial/index.php#contacts1-n">Contatos</a></li>
                    <li class="nav-item"><a class="nav-link link text-info text-primary display-4" href="painelFabrica.php"><?php echo "Bem vindo ".$Dados["Nome"];?></a>
                    </li>
                    <li class="nav-item"><a href="../funcao/logout.php" class="nav-link link text-info text-primary display-4">Logout</a></li>
                    <li class="nav-item"><a href="https://klabin.com.br/" target="_blank" class="nav-link link text-info text-primary display-4">
                            <span class="mobi-mbri mobi-mbri-globe-2 mbr-iconfont mbr-iconfont-btn" style="color: rgb(38, 168, 56); fill: rgb(38, 168, 56);"></span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="https://web.facebook.com/Klabin.SA/?_rdc=1&_rdr" target="_blank" class="nav-link link text-info text-primary display-4">
                            <span class="mbr-iconfont socicon-facebook socicon" style="color: rgb(38, 168, 56); fill: rgb(38, 168, 56);"></span>
                        </a>
                    </li>
                    <li class="nav-item">
                    <a href="https://www.instagram.com/klabin.sa/?hl=pt-br" target="_blank" class="nav-link link text-info text-primary display-4">
                            <span class="mbr-iconfont socicon-instagram socicon" style="color: rgb(38, 168, 56); fill: rgb(38, 168, 56);"></span>
                        </a>
                    </li>
                </ul>
                
                
            </div>
        </div>
    </nav>
</section>

<section class="header6 cid-scXFNtFDjb mbr-fullscreen mbr-parallax-background" id="header6-1">
    <div class="mbr-overlay" style="opacity: 0.6; background-color: rgb(53, 53, 53);"></div>

    <div class="align-justify container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-6 col-md-12">
                <h2 class="mbr-section-title mbr-fonts-style mbr-white mb-3"><p>Quantidade de embalagens recicladas neste momento: <?php
                    require_once("../funcao/conexao.php");

                    $ComandoSQL = "SELECT COUNT(*) as QntEmbalagem FROM smartembalagem";

                    $Resultado = mysqli_query($Conex,$ComandoSQL);

                    $Dados = mysqli_fetch_array($Resultado);
                    
                    echo $Dados["QntEmbalagem"];
                ?></p></h2><br>

                <hr color="white">

                <h2 class="mbr-section-title mbr-fonts-style mbr-white mb-3"><p>Quantidade de papelões ondulados: <?php
                    require_once("../funcao/conexao.php");

                    $ComandoSQL = "SELECT COUNT(*) as QntPapelOndulado FROM smartembalagem WHERE TipoEmbalagem LIKE 'Papelao ondulado'";

                    $Resultado = mysqli_query($Conex, $ComandoSQL);

                    $Dados = mysqli_fetch_array($Resultado);

                    echo $Dados["QntPapelOndulado"];
                ?>
                </p>
                </h2><br>

                <h2 class="mbr-section-title mbr-fonts-style mbr-white mb-3"><p>Quantidade de papéis cartão: <?php
                    require_once("../funcao/conexao.php");

                    $ComandoSQL = "SELECT COUNT(*) as QntPapelOndulado FROM smartembalagem WHERE TipoEmbalagem LIKE 'Papel cartao'";

                    $Resultado = mysqli_query($Conex, $ComandoSQL);

                    $Dados = mysqli_fetch_array($Resultado);

                    echo $Dados["QntPapelOndulado"];
                ?>
                </p>
                </h2><br>

                <h2 class="mbr-section-title mbr-fonts-style mbr-white mb-3"><p>Quantidade de papéis kraft: <?php
                    require_once("../funcao/conexao.php");

                    $ComandoSQL = "SELECT COUNT(*) as QntPapelOndulado FROM smartembalagem WHERE TipoEmbalagem LIKE 'Papel kraft'";

                    $Resultado = mysqli_query($Conex, $ComandoSQL);

                    $Dados = mysqli_fetch_array($Resultado);

                    echo $Dados["QntPapelOndulado"];
                ?>
                </p>
                </h2><br>

                <h2 class="mbr-section-title mbr-fonts-style mbr-white mb-3"><p>Quantidade de papéis celulose: <?php
                    require_once("../funcao/conexao.php");

                    $ComandoSQL = "SELECT COUNT(*) as QntPapelOndulado FROM smartembalagem WHERE TipoEmbalagem LIKE 'Papel celulose'";

                    $Resultado = mysqli_query($Conex, $ComandoSQL);

                    $Dados = mysqli_fetch_array($Resultado);

                    echo $Dados["QntPapelOndulado"];
                ?>
                </p>
                </h2><br>

                <h2 class="mbr-section-title mbr-fonts-style mbr-white mb-3"><p>Quantidade de sacos industriais: <?php
                    require_once("../funcao/conexao.php");

                    $ComandoSQL = "SELECT COUNT(*) as QntPapelOndulado FROM smartembalagem WHERE TipoEmbalagem LIKE 'Saco industrial'";

                    $Resultado = mysqli_query($Conex, $ComandoSQL);

                    $Dados = mysqli_fetch_array($Resultado);

                    echo $Dados["QntPapelOndulado"];
                ?>
                </p>
                </h2><br>

                <hr color="white">

                <h2 class="mbr-section-title mbr-fonts-style mbr-white mb-3"><p>Quantidade de fábricas de reciclagem que adotaram o sistema SuperCycle ID: <?php
                    require_once("../funcao/conexao.php");

                    $ComandoSQL = "SELECT COUNT(*) as QntFabrica FROM fabrecicladora";

                    $Resultado = mysqli_query($Conex,$ComandoSQL);

                    $Dados = mysqli_fetch_array($Resultado);
                    
                    echo $Dados["QntFabrica"];
                ?></p></h2><br>
            </div>
        </div>
    </div>
</section>
<section class="content5 cid-sd21lKEBOm" id="content5-7">
    <div class="container" id="CRUD">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">
                <h2 class="align-center text-white"><strong>Pontos de reciclagem cadastrados</strong></h2><br>
                <table class="table text-white">
                    <thead class="">
                        <tr>
                        <th scope="col">Nome da fábrica</th>
                        <th scope="col">CNPJ</th>
                        <th scope="col">Email</th>
                        <th scope="col">Telefone</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            require_once("../funcao/conexao.php");
                            
                            $ComandoSQL = "Select Nome, Cnpj, email, Tel From fabrecicladora";

                            $Resultado = mysqli_query($Conex, $ComandoSQL);

                            while ($Dado = $Resultado->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>".$Dado["Nome"]."</td>";
                                echo "<td>".$Dado["Cnpj"]."</td>";
                                echo "<td>".$Dado["email"]."</td>";
                                echo "<td>".$Dado["Tel"]."</td>";
                                echo "</tr>";
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<section class="footer1 cid-scXH7DFQhu" once="footers" id="footer1-4">
    <div class="container">
        <div class="row mbr-white">
            <div class="col-12 col-md-12 col-lg-12">
                <h5 class="mbr-section-subtitle mbr-fonts-style mb-2 display-7"><strong>Créditos</strong><br></h5>
                <ul class="list mbr-fonts-style display-4">
                    <li class="mbr-text item-wrap"><a href="https://br.freepik.com/vetores/bandeira">Bandeira vetor criado por vectorpouch - br.freepik.com</a></li>
                    <li class="mbr-text item-wrap"><a href="https://br.freepik.com/fotos/negocio">Negócio foto criado por jcomp - br.freepik.com</a></li>
                    <li class="mbr-text item-wrap"> <a href="https://www.greeneletron.org.br/blog/quais-pre-requisitos-sao-necessarios-para-ser-uma-recicladora-homologada-da-green-eletron/"> Recicladora criada por Ana Oliveira Rovati - </a></li>
                </ul>
            </div>
            <div class="col-12 col-md-12 col-lg-12">
                <h5 class="mbr-section-subtitle mbr-fonts-style mb-2 display-7"><strong>Contato</strong><br></h5>
                <ul class="list mbr-fonts-style display-4">
                    <li class="mbr-text item-wrap"><span style="font-size: 1.1rem;">Email: exemplo@exemplo.com</span><br></li>
                    <li class="mbr-text item-wrap">Telefone: (xxx) xxxxx-xxxx</li>
                </ul>
            </div>
            <div class="col-12 col-md-12 col-lg-12">
                <h5 class="mbr-section-subtitle mbr-fonts-style mb-2 display-7"><strong>Sobre</strong></h5>
                <p class="mbr-text mbr-fonts-style mb-4 display-4">O SuperCycle ID é um sistema web responsivo e  foi criado a fim de facilitar e beneficiar a relação entre você, centro de reciclagem, e a empresa Klabin. Com o cadastro no nosso sistema, a Klabin poderá entrar em contato com você a fim de consolidar uma parceria.&nbsp; &nbsp;</p>
                <h5 class="mbr-section-subtitle mbr-fonts-style mb-3 display-7">
                    <strong>Social</strong>
                </h5>
                <div class="social-row display-7">
                    <div class="soc-item">
                        <a href="https://klabin.com.br/" target="_blank">
                            <span class="mobi-mbri mobi-mbri-globe-2 mbr-iconfont mbr-iconfont-btn" style="color: rgb(38, 168, 56); fill: rgb(38, 168, 56);"></span>
                        </a>
                    </div>
                    <div class="soc-item">
                        <a href="https://web.facebook.com/Klabin.SA/?_rdc=1&_rdr" target="_blank">
                            <span class="mbr-iconfont socicon-facebook socicon" style="color: rgb(38, 168, 56); fill: rgb(38, 168, 56);"></span>
                        </a>
                    </div>
                    <div class="soc-item">
                        <a href="https://www.instagram.com/klabin.sa/?hl=pt-br" target="_blank">
                            <span class="mbr-iconfont socicon-instagram socicon" style="color: rgb(38, 168, 56); fill: rgb(38, 168, 56);"></span>
                        </a>
                    </div>
                    
                </div>
            </div>
            
        </div>
    </div>
</section>
<script src="../assets/web/assets/jquery/jquery.min.js"></script> <script src="../assets/popper/popper.min.js"></script>  <script src="../assets/tether/tether.min.js"></script>  <script src="../assets/bootstrap/js/bootstrap.min.js"></script>  <script src="../assets/smoothscroll/smooth-scroll.js"></script>  <script src="../assets/dropdown/js/nav-dropdown.js"></script>  <script src="../assets/dropdown/js/navbar-dropdown.js"></script>  <script src="../assets/touchswipe/jquery.touch-swipe.min.js"></script>  <script src="../assets/viewportchecker/jquery.viewportchecker.js"></script>  <script src="../assets/formstyler/jquery.formstyler.js"></script>  <script src="../assets/formstyler/jquery.formstyler.min.js"></script>  <script src="../assets/datepicker/jquery.datetimepicker.full.js"></script>  <script src="../assets/theme/js/script.js"></script><script src="./funcao/index.js"></script>
  
  
  <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i class="mbr-arrow-up-icon mbr-arrow-up-icon-cm cm-icon cm-icon-smallarrow-up"></i></a></div>
     <input name="animation" type="hidden">
    </body>
</html>