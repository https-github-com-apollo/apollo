<!DOCTYPE html>
<html lang="pt-br">
<head>
  
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta lang="pt-br">
  <meta name="generator" content="Mobirise v5.1.4, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon">
  <meta name="description" content="">
  
  
  <title>Login_Cadastro</title>
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/animatecss/animate.css">
  <link rel="stylesheet" href="assets/formstyler/jquery.formstyler.css">
  <link rel="stylesheet" href="assets/formstyler/jquery.formstyler.theme.css">
  <link rel="stylesheet" href="assets/datepicker/jquery.datetimepicker.min.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
  
</head>
<body>
  
  <section class="menu menu1 cid-sd2hsjFLPI" once="menu" id="menu1-q">
    

    <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
        <div class="container">
            <div class="navbar-brand">
                
                <span class="navbar-caption-wrap"><a class="navbar-caption text-info display-7" href="index.php">SuperCycle ID</a></span>
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
                <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true"><li class="nav-item"><a class="nav-link link text-info text-primary display-4" href="index.php#Sobre">Sobre</a></li>
                    <li class="nav-item"><a class="nav-link link text-info text-primary display-4" href="index.php#contacts1-n">Contatos</a></li>
                    <li class="nav-item"><a class="nav-link link text-info text-primary display-4" href="Entrar_Cadastrar.php">Entrar</a>
                    </li><li class="nav-item"><a class="nav-link link text-info text-primary display-4" href="Entrar_Cadastrar.php">Cadastrar</a></li></ul>
                
                
            </div>
        </div>
    </nav>
</section>

<section class="form9 cid-sd2KWuQqDG" id="form9-s">
    
    
    <div class="container">
        <div class="mbr-section-head">
            <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2"><strong>Entrar</strong></h3>
            
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-lg-8 mx-auto mbr-form">
                <form action="Login.php" method="POST" class="mbr-form form-with-styler mx-auto">
                    <div class="">
                        
                        <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">Oops...! Houve algum erro!</div>
                    </div>
                    <div class="dragArea row">
                        <div class="col-lg-12">
                            <p class="mbr-text mbr-fonts-style align-center mb-4 display-7">Após efetuar a entrada, você será redirecionado ao painel de controle.</p>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 form-group">
                            <input type="number" name="cnpjCpfEntrar" placeholder="CNPJ ou CPF" data-form-field="" class="form-control" value="" id="name-form9-s" required>
                        </div>
                        <div data-for="email" class="col-lg-4 col-md-4 col-sm-12 form-group">
                            <input type="password" name="senhaEntrar" placeholder="Senha" data-form-field="" class="form-control" value="" id="email-form9-s" required>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 mbr-section-btn align-center"><button type="submit" class="btn btn-info display-4" name="envioLogin">Entrar</button></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="form7 cid-sd2KXAJI0R" id="form7-t">
    
    
    <div class="container">
        <div class="mbr-section-head">
            <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2"><strong>Cadastrar</strong><strong><br></strong></h3>
            
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-lg-8 mx-auto mbr-form">
                <form action="cadastro.php" method="POST" data-rcpha_sitekey="" data-rcpha_secretkey="" class="mbr-form form-with-styler mx-auto">
                    <p class="mbr-text mbr-fonts-style align-center mb-4 display-7">Se você é uma fábrica recicladora, cadastre-se aqui.</p>
                    <div class="">
                        <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">Oops...! Houve algum erro!</div>
                    </div>

                        <div class="col-lg-12 col-md-12 col-sm-12">
                            
                            <input type="text" name="nomeCadastro" placeholder="Nome" data-form-field="name" class="form-control" value="" required>
                            
                            <br>
                            <input type="password" name="senhaCadastro" placeholder="Senha" data-form-field="" class="form-control" value=""  required>
                            
                            <br>
                            <input type="password" name="confirmaSenhaCadastro" placeholder="Confirmar senha" data-form-field="" class="form-control" value=""  required>
                            
                            <br>
                            <input type="text" name="cnpjCadastro" placeholder="CNPJ" data-form-field="name" class="form-control" value="" minlength="14" maxlength="14" required>
                            
                            <br>
                            <input type="email" name="emailCadastro" placeholder="Email" class="form-control" value="" required>
                            
                            <br>
                            
                            <input type="text" name="telCadastro" placeholder="DDD + Telefone" class="form-control" required>

                            <br>
                            <input type="text" id="CepCadastro" name="cepCadastro" placeholder="CEP" class="form-control" required>  

                            <br>
                        </div>

                    <div class="col-auto mbr-section-btn align-center"><button type="submit" class="btn btn-info display-4" name="envioFabricaCadastro">Cadastrar<br></button></div>

                </form>
            </div>
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-lg-8 mx-auto mbr-form">
                <form action="cadastro.php" method="post" class="mbr-form form-with-styler mx-auto">
                    <p class="mbr-text mbr-fonts-style align-center mb-4 display-7">Se você é um administrador da Klabin, cadastre-se aqui.</p>

                    <div class="col-lg-12 col-md-12 col-sm-12 form-group" data-for="">
                        <input type="text" name="nomeCadastro" placeholder="Nome" data-form-field="" class="form-control" value="" required>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 form-group" data-for="">
                        <input type="text" name="cpfCadastro" placeholder="CPF" data-form-field="" class="form-control" value="" minlength="11" maxlength="11" required>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 form-group" data-for="">
                        <input type="password" name="senhaCadastro" placeholder="Senha" data-form-field="" class="form-control" value=""  required>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 form-group" data-for="">
                        <input type="password" name="confirmaSenhaCadastro" placeholder="Confirmar senha" data-form-field="" class="form-control" value="" required>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 form-group" data-for="">
                        <input type="text" name="tokenValidacaoCadastro" placeholder="Token de validação" data-form-field="" class="form-control" value="" required>
                    </div>

                    <div class="col-auto mbr-section-btn align-center"><button type="submit" class="btn btn-info display-4" name="envioAdmKlabinCadastro">Cadastrar<br></button></div>
                </form>
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

<section style="background-color: #fff; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Helvetica Neue', Arial, sans-serif; color:#aaa; font-size:12px; padding: 0; align-items: center; display: flex;"><a href="https://mobirise.site/z" style="flex: 1 1; height: 3rem; padding-left: 1rem;"></a><p style="flex: 0 0 auto; margin:0; padding-right:1rem;"><a href="https://mobirise.site/i" style="color:#aaa;">Made with Mobirise</a> free software</p></section><script src="assets/web/assets/jquery/jquery.min.js"></script>  <script src="assets/popper/popper.min.js"></script>  <script src="assets/tether/tether.min.js"></script>  <script src="assets/bootstrap/js/bootstrap.min.js"></script>  <script src="assets/smoothscroll/smooth-scroll.js"></script>  <script src="assets/dropdown/js/nav-dropdown.js"></script>  <script src="assets/dropdown/js/navbar-dropdown.js"></script>  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>  <script src="assets/viewportchecker/jquery.viewportchecker.js"></script>  <script src="assets/formstyler/jquery.formstyler.js"></script>  <script src="assets/formstyler/jquery.formstyler.min.js"></script>  <script src="assets/datepicker/jquery.datetimepicker.full.js"></script>  <script src="assets/theme/js/script.js"></script> <script src="index.js"></script> 
  
  
 <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i class="mbr-arrow-up-icon mbr-arrow-up-icon-cm cm-icon cm-icon-smallarrow-up"></i></a></div>
    <input name="animation" type="hidden">
  </body>
</html>