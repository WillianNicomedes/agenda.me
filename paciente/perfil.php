<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- navegador para responder à largura da tela -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>agenda.me</title>
   
    <!-- Favicon icon -->
    <link rel="shortcut icon" href="./assets/images/agenda.ico" type="image/x-icon">
    <!-- Bootstrap com CSS -->
    <link href="./assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Personalizando CSS -->
    <link href="./assets/css/style.css" rel="stylesheet">
    
    <!-- alterar as cores do tema -->
    <link href="./assets/css/colors/default-dark.css" id="theme" rel="stylesheet">
</head>

<body class="fix-header card-no-border fix-sidebar">
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">agenda.me</p>
        </div>
    </div>

    <div id="main-wrapper">
            <header class="topbar">
                <nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
                    <a class="navbar-brand" href="#"></a>
                    <div class="navbar-header">
                        <a class="navbar-brand" href="#">          
                            <img src="./assets/images/logo.png" alt="agenda.me" class="dark-logo" width="130"/>          
                        </a>
                    </div>
            
                <div class="navbar-collapse">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up waves-effect waves-dark"
                            href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                    </ul>
                    <ul class="navbar-nav my-lg-0">
                       
<!-- Campo de pesquisar -->
                        <li class="nav-item hidden-xs-down search-box"> <a
                                class="nav-link hidden-sm-down waves-effect waves-dark" href="javascript:void(0)"><i
                                    class="ti-search"></i></a>
                            <form class="app-search">
                                <input type="text" class="form-control" placeholder="Pesquisar..."> <a
                                    class="srh-btn"><i class="ti-close"></i></a>
                            </form>
                        </li>

<!-- Perfil do paciente -->
                        <li class="nav-item">
                            <a class="nav-link waves-effect waves-dark" href="#"> Paciente <img src="./assets/images/avatar2.png"
                            alt="usuário" class="profile-pic" /></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
      
<!-- Barra Lateral Esquerda sidebar.scss  -->
        <aside class="left-sidebar">
            <div class="scroll-sidebar">
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li> <a class="waves-effect waves-dark" href="perfil.php" aria-expanded="false"><i
                            class="mdi mdi-account-check"></i><span class="hide-menu">Perfil</span></a></li>
                        <li> <a class="waves-effect waves-dark" href="mapa.php" aria-expanded="false"><i
                            class="mdi mdi-earth"></i><span class="hide-menu">Mapa</span></a></li>
                        <li> <a class="waves-effect waves-dark" href="paciente.php" aria-expanded="false"><i
                            class="mdi mdi-table"></i><span class="hide-menu">Acesso</span></a></li>
                        <li> <a class="waves-effect waves-dark" href="../calendario/login.php" aria-expanded="false" target="_blank"><i
                            class="mdi mdi-book-open-variant"></i><span class="hide-menu">Agendamento</span></a></li>
                    </ul>
                </nav>
                <hr>
            </div> 

<!--Saída da página-->
            <div class="scroll-sidebar">
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li> <a class="nav-link active" href="http://localhost/agenda.me/" aria-expanded="false"><i
                            class="mdi mdi-account-check"></i><span class="hide-menu">Logout</span></a></li>
                    </ul>
                </nav>
            </div>
        </aside>

<!--Wrapper da página e card mapa-->
        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">Perfil</h3>
                    </div>
                    <div class="col-md-7 align-self-center">
                        <a href="../informacao/info.inicio.php#contact"
                            class="btn waves-effect waves-light btn-danger pull-right hidden-sm-down" target="_blank"> Ajuda</a>
                    </div>
                </div>
           
<!--Card perfil do paciente-->
                <div class="row">
                    <div class="col-lg-4 col-xlg-3">
                        <div class="card">
                            <div class="card-body">
                                <center class="mt-4"> <img src="./assets/images/avatar2.png" class="img-circle"
                                        width="150" />
                                    <h4 class="card-title mt-2">johnathan Gomes</h4>
                                    <h6 class="card-subtitle">Paciente</h6>
                                    <div class="row text-center justify-content-md-center">
                                        <div class="col-4"><a href="javascript:void(0)" class="link"><i
                                                    class="icon-people"></i>
                                                <font class="font-medium">22 anos</font>
                                            </a></div>
                                        <div class="col-4"><a href="javascript:void(0)" class="link"><i
                                                    class="icon-picture"></i>
                                                <font class="font-medium">2</font>
                                            </a></div>
                                    </div>
                                </center>
                            </div>
                        </div>
                    </div>

<!-- Card de coluna dados -->
                    <div class="col-lg-8 col-xlg-9">
                        <div class="card">
                            <div class="card-body">
                                <form class="form-horizontal form-material mx-2">
                                    <div class="form-group">
                                        <label class="col-md-12">Nome</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="Johnathan Gomes"
                                                class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">E-mail</label>
                                        <div class="col-md-12">
                                            <input type="email" placeholder="johnathan@gmail.com"
                                                class="form-control form-control-line" name="example-email"
                                                id="example-email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Senha</label>
                                        <div class="col-md-12">
                                            <input type="password" value="password"
                                                class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Telefone</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="123 456 7890"
                                                class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Messagem</label>
                                        <div class="col-md-12">
                                            <textarea rows="5" class="form-control form-control-line"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-12">Selecionar opção</label>
                                        <div class="col-sm-12">
                                            <select class="form-control form-control-line">
                                                <option>Brasil</option>
                                                <option>China</option>
                                                <option>Estados Unidos</option>
                                                <option>México</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success">Salvar</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
<!--Tradutor de Libras-->
<div vw class="enabled">
    <div vw-access-button class="active"></div>
    <div vw-plugin-wrapper>
      <div class="vw-plugin-top-wrapper"></div>
    </div>
</div>
  <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
  <script>
    new window.VLibras.Widget('https://vlibras.gov.br/app');
</script>
    

<!--Rodapé-->
  <footer class="footer">Copyright © 2022 agenda.me Todos os direitos reservados</a></footer>

<!-- Javascript geral da página -->
<script src="./assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap JavaScript -->
<script src="./assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Scrollbar JavaScript -->
<script src="./assets/js/perfect-scrollbar.jquery.min.js"></script>
<!--Efeitos de onda-->
<script src="./assets/js/waves.js"></script>
<!--Menu sidebar -->
<script src="./assets/js/sidebarmenu.js"></script>
<!--Personalização JavaScript -->
<script src="./assets/js/custom.min.js"></script>
</body>
</html>