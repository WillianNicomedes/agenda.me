<?php
require_once('../class/config.php');
require_once('../autoload.php');

$login = new Login();
$login->VerificarToken($_SESSION['cd_token'],$_SESSION['opcao']);

//echo "<h1>Bem vindo $login->nome!<br>Email:$login->email";//
?>
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
    <link rel="stylesheet" href="../universidade/css/style.css">

    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--Favicons-->
    <!--===============================================-->
    <link rel="shortcut icon" href="../universidade/images/agenda.ico" type="image/x-icon">
  </head>
  <body>
   
<!--Navegação do site-->
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

<!--Notificação popup-->
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                  <p class="mb-0 font-weight-normal float-left dropdown-header">Notificações</p>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                        <div class="preview-icon bg-success">
                          <i class="mdi mdi-information mx-0"></i>
                        </div>
                    </div>
                    <div class="preview-item-content">Verificação de dados</h6>
                        <p class="font-weight-light small-text mb-0 text-muted">
                         3 horas atrás
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
                        <h6 class="preview-subject font-weight-normal">Registro de novo paciente</h6>
                        <p class="font-weight-light small-text mb-0 text-muted">
                          5 dias atrás
                        </p>
                    </div>
                  </a>
                </div>
              </li>
             
<!--Campo de pesquisar-->			  
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
                        
<!--Button de logout-->
<ul class="navbar-nav navbar-nav-right">  
                <li class="nav-item nav-profile dropdown">
					<a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">
					  <span class="nav-profile-name">Estagiário</span>
					  <span class="online-status"></span>
					  <img src="../estagiario/images/avatar3.png" alt="perfil"/>
					</a>
					<div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
						<a href="http://localhost/agenda.me-main/" class="dropdown-item">
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

<!--Navegação nav-bar-->
      <nav class="bottom-navbar">
        <div class="container">
            <ul class="nav page-navigation">
              <li class="nav-item">
                <a class="nav-link" href="estagiario.php">
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



<!-- Página Container -->
<div class="w3-container w3-content" style="max-width:4000px;margin-top:50px">    
  <!-- Grid -->
  <div class="w3-row">
    <!-- Coluna esquerda -->
    <div class="w3-col m3">
      <!-- Perfil -->
      <div class="w3-card w3-round w3-white">
        <div class="w3-container">
         <h4 class="w3-center">Meu Perfil</h4>
         <p class="w3-center"><img src="../estagiario/images/avatar3.png" class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p>
         <hr>
         <p><i class="fa fa-pencil fa-fw w3-margin-right w3-text-theme"></i> João Santos Pereira, (Estagiário)</p>
         <p><i class="fa fa-home fa-fw w3-margin-right w3-text-theme"></i> São Vicente, SP</p>
         <p><i class="fa fa-birthday-cake fa-fw w3-margin-right w3-text-theme"></i> Abril 26, 1997</p>
        </div>
      </div>
      <br>
      
      <!-- Card -->
      <div class="w3-card w3-round">
        <div class="w3-white">
          <button onclick="myFunction('Demo1')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-circle-o-notch fa-fw w3-margin-right"></i>Prontuários</button>
          <div id="Demo1" class="w3-hide w3-container">
            <p>Restrito por horário de agendamento</p>
          </div>
          <button onclick="myFunction('Demo2')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-calendar-check-o fa-fw w3-margin-right"></i>Acesso Consultas</button>
          <div id="Demo2" class="w3-hide w3-container">
            <p>Usuário: estagiario</p>
            <p>Senha: 1031</p>
          </div>
        </div>      
      </div>
      <br>
      
      <!-- Informações --> 
      <div class="w3-card w3-round w3-white w3-hide-small">
        <div class="w3-container">
          <p>Informações</p>
          <p>
            <span class="w3-tag w3-small w3-theme-d5">Notícias</span>
            <span class="w3-tag w3-small w3-theme-d4">Dados</span>
            <span class="w3-tag w3-small w3-theme-d3">Atendimentos</span>
            <span class="w3-tag w3-small w3-theme-d2">Isolamento</span>
            <span class="w3-tag w3-small w3-theme-d1">Ansiedade</span>
            <span class="w3-tag w3-small w3-theme">Depressão</span>
            <span class="w3-tag w3-small w3-theme-l1">Agendamentos</span>
            <span class="w3-tag w3-small w3-theme-l1">Consultas</span>
          </p>
        </div>
      </div>
      <br>
      
      <!-- Alerta Box -->
      <div class="w3-container w3-display-container w3-round w3-theme-l4 w3-border w3-theme-border w3-margin-bottom w3-hide-small">
        <span onclick="this.parentElement.style.display='none'" class="w3-button w3-theme-l3 w3-display-topright">
          <i class="fa fa-remove"></i>
        </span>
        <p><strong>Olá, João Santos Pereira!</strong></p>
        <p>Verifique suas consultas, pode conter paciente esperando por ajuda. :)</p>
      </div>
    </div>
    
<!--Card-->
    <div class="w3-col m7">
      <div class="w3-row-padding">
        <div class="w3-col m12">
          <div class="w3-card w3-round w3-white">
            <div class="w3-container w3-padding">
              <h6 class="w3-opacity">Atendimento e agendameto de consultas</h6>
              <p contenteditable="true" class="w3-border w3-padding">Status: Estamos com você!</p>
              <button type="button" class="w3-button w3-theme"><i class="fa fa-pencil"></i> Adicionar</button> 
            </div>
          </div>
        </div>
      </div>
      
      <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
        <img src="../estagiario/images/avatar6.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
        <span class="w3-right w3-opacity">1 min</span>
        <h4>Joyce Santos (Psicóloga)</h4><br>
        <hr class="w3-clear">
        <p>Tente uma, duas, três vezes e se possível tente a quarta, a quinta e quantas vezes for necessário. Só não desista nas primeiras tentativas, a persistência é amiga da conquista. Se você quer chegar aonde a maioria não chega, faça o que a maioria não faz.</p>
          <div class="w3-row-padding" style="margin:0 -16px">
            <div class="w3-half">     
            </div>
            <div class="w3-half">
          </div>
        </div>
        <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"><i class="fa fa-thumbs-up"></i> Salvar</button> 
        <button type="button" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-comment"></i> Adicionar</button> 
      </div>
      
      <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
        <img src="../estagiario/images/avatar3.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
        <span class="w3-right w3-opacity">16 min</span>
        <h4>João Santos Pereira (Estagiário Psicólogia)</h4><br>
        <hr class="w3-clear">
        <p>É importante cuidar do paciente, e o paciente será acompanhado, mas ao mesmo tempo ocorrem como resultado de muita dor e sofrimento.</p>
        <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"><i class="fa fa-thumbs-up"></i> Salvar</button> 
        <button type="button" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-comment"></i> Adicionar</button> 
      </div>  
    </div>
    
    <!-- Card Universidade -->
    <div class="w3-col m2">
      <div class="w3-card w3-round w3-white w3-center">
        <div class="w3-container">
          <p>Consultórios:</p>
          <img src="../estagiario/images/santa.png" alt="Forest" style="width:100%">
          <p><strong>Verificar</strong></p>
          <p>Seg à Sex 7:00 às 18:00</p>
          <p><a href="https://www.cvv.org.br/" target="_blank"><button class="btn btn-lg btn-outline-primary rounded-pill" type="submit">Contato</button></a></p>
        </div>
      </div>
      <br>

<!--Card atendimento-->
      <div class="w3-card w3-round w3-white w3-center">
        <div class="w3-container">
          <p>Atendimento:</p>
          <img src="../estagiario/images/avatar2.png" alt="Avatar" style="width:50%"><br>
          <span>Gustavo Silva Nascimento</span>
          <div class="w3-row w3-opacity">
            <div class="w3-half">
              <button class="w3-button w3-block w3-green w3-section" title="Accept"><i class="fa fa-check"></i></button>
            </div>
            <div class="w3-half">
              <button class="w3-button w3-block w3-red w3-section" title="Decline"><i class="fa fa-remove"></i></button>
            </div>
          </div>
        </div>
      </div>
      <br>

<!--Suporte de ajuda-->
      <div class="w3-card w3-round w3-white w3-padding-32 w3-center">
      <div class="pe-1 mb-3 mb-xl-0">
				<a href="../informacao/info.inicio.php#contact"
        class="btn btn-outline-inverse-info btn-icon-text" target="_blank"> Ajuda<i class="mdi mdi-help-circle-outline btn-icon-append"></i></a>             
			</div>                           
			</button>
      </div>
    </div>
  </div>
</div>
<br>

<!--Animação de alerta-->
<script>
function myFunction(id) {
  var x = document.getElementById(id);
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
    x.previousElementSibling.className += " w3-theme-d1";
  } else { 
    x.className = x.className.replace("w3-show", "");
    x.previousElementSibling.className = 
    x.previousElementSibling.className.replace(" w3-theme-d1", "");
  }
}

function openNav() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>

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
				<footer class="footer">
					<div class="footer-wrap">
					  <div class="d-sm-flex justify-content-center justify-content-sm-between">
						<span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2022 agenda.me Todos os direitos reservados</span>
						<span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Nossa história<a href="../informacao/info.php" target="_blank"> Saiba mais</a> agenda.me</span>
					  </div>
					</div>
				</footer>
			</div>

	<!-- ===============================================-->
  <!--    JavaScripts-->
  <!-- ===============================================-->
	<script src="../universidade/vendors/base/vendor.bundle.base.js"></script>
	<script src="../universidade/js/template.js"></script>
  </body>
</html>