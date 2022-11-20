<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>agenda.me</title>

<!--CSS geral da página-->
  <link rel="stylesheet" href="../universidade/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../universidade/vendors/base/vendor.bundle.base.css">
  <link rel="stylesheet" href="../universidade/css/style.css">
<!--Favicon da página-->
  <link rel="shortcut icon" href="../universidade/images/agenda.ico" type="image/x-icon">
</head>

<body>
<!--Notificação da página-->
  <div class="container-scroller">                      
    <div class="horizontal-menu">
      <nav class="navbar top-navbar col-lg-12 col-12 p-0">
        <div class="container-fluid">
          <div class="navbar-menu-wrapper d-flex align-items-center justify-content-between">
            <ul class="navbar-nav navbar-nav-left">
              <li class="nav-item ms-0 me-5 d-lg-flex d-none">
                <a href="#" class="nav-link horizontal-nav-left-menu"><i class="mdi mdi-format-list-bulleted"></i></a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
                  <i class="mdi mdi-bell mx-0"></i>
                  <span class="count bg-success">2</span>
                </a>

                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                  <p class="mb-0 font-weight-normal float-left dropdown-header">Notificações</p>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                        <div class="preview-icon bg-success">
                          <i class="mdi mdi-information mx-0"></i>
                        </div>
                    </div>
                    <div class="preview-item-content">Dados atualizados</h6>
                        <p class="font-weight-light small-text mb-0 text-muted">
                         Agora mesmo
                        </p>
                    </div>
                  </a>
                 
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                        <div class="preview-icon bg-info">
                          <i class="mdi mdi-account-box mx-0"></i>
                        </div>
                    </div>
                    <div class="preview-item-content">
                        <h6 class="preview-subject font-weight-normal">Registro de novos pacientes</h6>
                        <p class="font-weight-light small-text mb-0 text-muted">
                          7 dias atrás
                        </p>
                    </div>
                  </a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link count-indicator "><i class="mdi mdi-message-reply-text"></i></a>
              </li>
              <li class="nav-item nav-search d-none d-lg-block ms-3">
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="Pesquisar">
                        <i class="mdi mdi-magnify"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control" placeholder="Pesquisar..." aria-label="search" aria-describedby="search">
                </div>
              </li>	
            </ul>

<!--Logout do site-->
            <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item nav-profile dropdown">
                  <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">
                    <span class="nav-profile-name">Estagiário</span>
                    <span class="online-status"></span>
                    <img src="../estagiario/images/avatar3.png" alt="perfil"/>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                    <a href="http://localhost/agenda.me/" class="dropdown-item">
                      <i class="mdi mdi-logout text-primary"></i>
                      Logout
                    </a>
                  </div>
                  </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="horizontal-menu-toggle">
              <span class="mdi mdi-menu"></span>
            </button>
          </div>
        </div>
      </nav>

<!--Nav-bar do site-->
      <nav class="bottom-navbar">
        <div class="container">
            <ul class="nav page-navigation">
              <li class="nav-item">
                <a class="nav-link" href="../estagiario/estagiario.php">
                  <i class="mdi mdi-file-document-box menu-icon"></i>
                  <span class="menu-title">Início</span>
                </a>
              </li>
        
              <li class="nav-item">
                  <a href="../estagiario/dados.php" class="nav-link">
                    <i class="mdi mdi-finance menu-icon"></i>
                    <span class="menu-title">Dados</span>
                    <i class="menu-arrow"></i>
                  </a>
              </li>
              <li class="nav-item">
                  <a href="../sis-agendame/estagio.php?menuop=contatos" class="nav-link" target="_blank">
                    <i class="mdi mdi-grid menu-icon"></i>
                    <span class="menu-title">Pacientes</span>
                    <i class="menu-arrow"></i>
                  </a>
              </li>
        
              <li class="nav-item">
                  <a href="../calendario/login.php" class="nav-link" target="_blank">
                    <i class="mdi mdi-codepen menu-icon"></i>
                    <span class="menu-title">Consultas</span>
                    <i class="menu-arrow"></i>
                  </a>
              </li>
              <li class="nav-item">
                  <a href="../estagiario/historia.php" class="nav-link">
                    <i class="mdi mdi-file-document-box-outline menu-icon"></i>
                    <span class="menu-title">Quem Somos</span></a>
              </li>
            </ul>
        </div>
      </nav>
    </div>               

<!--Dados coletados chartjs-->
    <div class="container-fluid page-body-wrapper">
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">      
          </div>
          <div class="row">
            <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">População Brasileira (Depressão - Dados OMS)</h4>
                  <canvas id="areaChart"></canvas>
                </div>
              </div>
            </div>
            <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">População Brasileira (Transtorno de Ansiedade - Dados OMS)</h4>
                  <canvas id="barChart"></canvas>
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
       
<!--Rodapé do site-->
        <footer class="footer">
          <div class="footer-wrap">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2022 agenda.me Todos os direitos reservados</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Nossa história<a href="../informacao/info.php" target="_blank"> Saiba mais</a> agenda.me</span>
            </div>
          </div>
        </footer>
      </div>
    </div>
  </div>

<!--Javascript da página-->
  <script src="../universidade/vendors/base/vendor.bundle.base.js"></script>
  <script src="../universidade/vendors/chart.js/Chart.min.js"></script>
  <script src="../universidade/js/template.js"></script>
  <script src="../universidade/js/chart.js"></script>
</body>
</html>