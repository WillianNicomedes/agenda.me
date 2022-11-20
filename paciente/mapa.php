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
                        <h3 class="text-themecolor">Google maps</h3>
                    </div>
                    <div class="col-md-7 align-self-center">
                    <a href="../informacao/info.inicio.php#contact"
                            class="btn waves-effect waves-light btn-danger pull-right hidden-sm-down" target="_blank"> Ajuda</a>
                    </div>
                </div>

<!--Mapa google localização-->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Localização mais próxima!</h4>
                                    <center><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3645.8661854743277!2d-46.385783385411656!3d-23.965171582512383!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce1c63258590e3%3A0x118a947878b90924!2sETEC%20Dra.%20Ruth%20Cardoso!5e0!3m2!1spt-BR!2sbr!4v1667767393553!5m2!1spt-BR!2sbr" width="1000" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></center>
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