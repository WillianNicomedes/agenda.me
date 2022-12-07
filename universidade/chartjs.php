<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>agenda.me</title>
  <!--Stylesheets-->
    <!--===============================================-->
  <link rel="stylesheet" href="../universidade/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../universidade/vendors/base/vendor.bundle.base.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="../universidade/css/style.css">

   <!--Favicons-->
    <!--===============================================-->
  <link rel="shortcut icon" href="../universidade/images/agenda.ico" type="image/x-icon">
</head>

<body>
<!--Campo de pesquisar-->	
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
                    <div class="preview-item-content">Dados aplicados</h6>
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

<!--Button de cadastro-->
<ul class="navbar-nav navbar-nav-right">   
                <li class="nav-item dropdown d-lg-flex d-none">
				           <a class="dropdown-toggle show-dropdown-arrow btn btn-inverse-primary btn-sm" onclick="document.getElementById('id03').style.display='block'" class="w3-button w3-green w3-large">Estagiário</a>
                  </a>
                </li>
  
<!--Button de logout-->
                <li class="nav-item nav-profile dropdown">
                  <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">
                    <span class="nav-profile-name">Universidade</span>
                    <span class="online-status"></span>
                    <img src="images/dashboard/perfil.png" alt="perfil"/>
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

<!--Navegação do site-->
      <nav class="bottom-navbar">
        <div class="container">
            <ul class="nav page-navigation">
              <li class="nav-item">
                <a class="nav-link" href="../universidade/universidade.php">
                  <i class="mdi mdi-file-document-box menu-icon"></i>
                  <span class="menu-title">Dashboard</span>
                </a>
              </li>
        
              <li class="nav-item">
                  <a href="../universidade/chartjs.php" class="nav-link">
                    <i class="mdi mdi-finance menu-icon"></i>
                    <span class="menu-title">Dados</span>
                    <i class="menu-arrow"></i>
                  </a>
              </li>
              <li class="nav-item">
                  <a href="../sis-agendame/admin.php?menuop=home" class="nav-link" target="_blank">
                    <i class="mdi mdi-grid menu-icon"></i>
                    <span class="menu-title">Acesso</span>
                    <i class="menu-arrow"></i>
                  </a>
              </li>
              
              <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="mdi mdi-codepen menu-icon"></i>
                    <span class="menu-title">Serviços</span>
                    <i class="menu-arrow"></i>
                  </a>
                  <div class="submenu">
                      <ul class="submenu-item">
                          <li class="nav-item"><a class="nav-link" href="../sis-agendame/admin.php?menuop=contatos" target="_blank">Pacientes</a></li>
                          <li class="nav-item"><a class="nav-link" href="../sis-agendame/admin.php?menuop=tarefas" target="_blank">Tarefas</a></li>
                          <li class="nav-item"><a class="nav-link" href="../calendario/login.php" target="_blank">Consultas</a></li>
                      </ul>
                  </div>
              </li>
              <li class="nav-item">
                  <a href="../universidade/historia.php" class="nav-link">
                    <i class="mdi mdi-file-document-box-outline menu-icon"></i>
                    <span class="menu-title">Quem Somos</span></a>
              </li>
            </ul>
        </div>
      </nav>
    </div>               

<!--Gráficos de dados-->
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

<!-- CADASTRO DE ESTAGIÁRIO !-->
<div class="w3-container">
  <div id="id03" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

      <div class="w3-center"><br>
        <span onclick="document.getElementById('id03').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
      </div>

      <form class="w3-container" action="" method="POST">
        <div class="w3-section">
        <div class="box">
        <form  method="POST">
            <fieldset>
                <legend><b>Cadastro de Estagiário</b></legend>
                <br><br>
                <div class="inputBox">
                    <label for="nome_aluno" class="labelInput">Nome aluno:</label>
                    <br>
                    <input type="text" name="nome_aluno" id="nome_aluno" class="inputUser" placeholder="Digite nome do aluno" maxlength="50" required>
                </div>
                <br>

                <div class="inputBox">
                  <label for="senha" class="labelInput">Senha do aluno:</label>
                  <br>
                  <input type="password" name="senha" id="senha" class="inputUser" placeholder="Digite senha do aluno" maxlength="30" required>
                </div>

                <br>

                <div class="inputBox">
                  <label for="email" class="labelInput">E-mail do aluno:</label>
                  <br>
                  <input type="email" name="email_aluno" id="email_aluno" class="inputUser" placeholder="Digite e-mail do aluno" maxlength="100" required>
                </div>

                <br>

                <div class="inputBox">
                  <label for="periodo" class="labelInput">Período:</label>
                  <br>
                  <input type="text" name="periodo" id="periodo" class="inputUser" placeholder="Digite período do aluno" maxlength="20"required>
                </div>
                
                <br>

                    <label for="data_nascimento"><b>Data de nascimento:</b> </label>
					<br>
                    <input type="date" name="data_nascimento" id="data_nascimento" required>

				<br>
				<br>
                
                <div class="inputBox">
                  <label for="ra" class="labelInput">RA do aluno:</label>
                  <br>
                  <input type="text" name="ra" id="ra" class="inputUser" placeholder="Digite RA do aluno" maxlength="9" required>
                </div>    

                <br>

                <div class="inputBox">
                  <label for="cpf_aluno" class="labelInput">CPF do aluno:</label>
                  <br>
                  <input type="text" name="cpf_aluno" id="cpf_aluno" class="inputUser" placeholder="Digite CPF do aluno" maxlength="11" required>
                </div>

                <br>

				<div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
                   <button onclick="document.getElementById('id03').style.display='none'" type="button" class="w3-button w3-red">Cancelar</button>
                   <span class="w3-right w3-hide-small"><input type="submit" name="submit" id="submit"  class="w3-button w3-green"></span></span>
                </div>
            </fieldset>
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
       
<!--Rodapé da tela-->
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

<!--Javascript geral-->
  <script src="../universidade/vendors/base/vendor.bundle.base.js"></script>
  <script src="../universidade/vendors/chart.js/Chart.min.js"></script>
  <script src="js/template.js"></script>
  <script src="../universidade/js/chart.js"></script>
</body>
</html>