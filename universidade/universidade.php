<?php
require_once('../class/config.php');
require_once('../class/Estatiticas.php');
require_once('../autoload.php');

$login = new Login();
$login->VerificarToken($_SESSION['cd_token'],$_SESSION['opcao']);

//echo "<h1>Bem vindo $login->nome!<br>Email:$login->email";//

  if(isset($_POST['ra'])&&isset($_POST['email_aluno'])&&isset($_POST['cpf_aluno'])&&isset($_POST['nome_aluno'])
  &&isset($_POST['data_nascimento'])&&isset($_POST['periodo'])&&isset($_POST['senha']))
  {
    $ra = limpaString($_POST['ra']);
    $email = limpaString($_POST['email_aluno']);
    $cpf = limpaString($_POST['cpf_aluno']);
    $nomeAluno = limpaString($_POST['nome_aluno']);
    $dataNascimento = limpaString($_POST['data_nascimento']);
    $periodo = limpaString($_POST['periodo']);
    $senha = limpaString($_POST['senha']);

    if(empty($ra)&&empty($email)&&empty($cpf)&&empty($nomeAluno)&&empty($dataNascimento)&&empty($periodo)&&empty($senha)){

    }else{
		$id = $_SESSION['id_universidade'];
        $estagiario = new Estagiario($ra,$email,$cpf,$nomeAluno,$dataNascimento,$periodo,$senha,$id);
        $estagiario->insertEstagiario();
       
    }
  }else{ 
  
  }
?>
<script>

</script>

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
    <link rel="shortcut icon" href="./images/agenda.ico" type="image/x-icon">
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
                    <div class="preview-item-content">Erro de aplicação</h6>
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
                        <h6 class="preview-subject font-weight-normal">Registro de novo estagiário</h6>
                        <p class="font-weight-light small-text mb-0 text-muted">
                          2 dias atrás
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

<!--Navegação nav-bar-->
      <nav class="bottom-navbar">
        <div class="container">
            <ul class="nav page-navigation">
              <li class="nav-item">
                <a class="nav-link" href="universidade.php">
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
                  <a href="../sis-agendame/admin.php" class="nav-link" target="_blank">
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

<!--Conteúdo do site-->
		<div class="container-fluid page-body-wrapper">
			<div class="main-panel">
				<div class="content-wrapper">
					<div class="row">
						<div class="col-sm-6 mb-4 mb-xl-0">
							<div class="d-lg-flex align-items-center">
								<div>
									<h3 class="text-dark font-weight-bold mb-2">Olá, bem-vindo de volta!</h3>
								</div>
								<div class="ms-lg-5 d-lg-flex d-none">
										<button type="button" class="btn bg-white btn-icon">
											<i class="mdi mdi-view-grid text-success"></i>
									</button>
										<button type="button" class="btn bg-white btn-icon ms-2">
											<i class="mdi mdi-format-list-bulleted font-weight-bold text-primary"></i>
										</button>
								</div>
							</div>
						</div>
					
<!--Button de suporte--> 

						<div class="col-sm-6">
							<div class="d-flex align-items-center justify-content-md-end">
								<div class="pe-1 mb-3 mb-xl-0">
								<div class="pe-1 mb-3 mb-xl-0">
									<a href="../informacao/info.inicio.php#contact"
                                    class="btn btn-outline-inverse-info btn-icon-text" target="_blank"> Ajuda<i class="mdi mdi-help-circle-outline btn-icon-append"></i></a>             
								</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row mt-4">	
					</div>

<!--Card de casos população-->
					<div class="row">
						<div class="col-sm-8 flex-column d-flex stretch-card">
							<div class="row">
								<div class="col-lg-4 d-flex grid-margin stretch-card">
									<div class="card bg-primary">
										<div class="card-body text-white">
											<p class="pb-0 mb-0">Total de casos:</p>
											<h3 class="font-weight-bold mb-3">23 milhões (12%)</h3>
											<div class="progress mb-3">
												<div class="progress-bar  bg-warning" role="progressbar" style="width: 40%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
											<p class="pb-0 mb-0">População Brasileira</p>
										</div>
									</div>
								</div>

								<div class="col-lg-4 d-flex grid-margin stretch-card">
									<div class="card sale-diffrence-border">
										<div class="card-body">
											<h2 class="text-dark mb-2 font-weight-bold">25,6%</h2>
											<h4 class="card-title mb-2">Transtorno de ansiedade</h4>
											<small class="text-muted">Março 2022</small>
										</div>
									</div>
								</div>
								<div class="col-lg-4 d-flex grid-margin stretch-card">
									<div class="card sale-visit-statistics-border">
										<div class="card-body">
											<h2 class="text-dark mb-2 font-weight-bold">27,6%</h2>
											<h4 class="card-title mb-2">Depressão após pandemia</h4>
											<small class="text-muted">Março 2022</small><br>
										</div>
									</div>
								</div>
							</div>

<!--Card de casos população-->
							<div class="row">
								<div class="col-sm-12 grid-margin d-flex stretch-card">
									<div class="card">
										<div class="card-body">
											<div class="d-flex align-items-center justify-content-between">
												<h4 class="card-title mb-2">População Brasileira</h4>
											</div>

<!--Card de casos população-->
											<div>
												<ul class="nav nav-tabs tab-no-active-fill" role="tablist">
													<li class="nav-item">
														<a class="nav-link active ps-2 pe-2" id="revenue-for-last-month-tab" data-bs-toggle="tab" href="#revenue-for-last-month" role="tab" aria-controls="revenue-for-last-month" aria-selected="true">Informação de Depressão</a>
													</li>
													<li class="nav-item">
														<a class="nav-link ps-2 pe-2" id="server-loading-tab" data-bs-toggle="tab" href="#server-loading" role="tab" aria-controls="server-loading" aria-selected="false">Transtorno de ansiedade</a>
													</li>
													<li class="nav-item">
														<a class="nav-link ps-2 pe-2" id="data-managed-tab" data-bs-toggle="tab" href="#data-managed" role="tab" aria-controls="data-managed" aria-selected="false">Dados gerenciados</a>
													</li>
												</ul>
												<div class="tab-content tab-no-active-fill-tab-content">
													<div class="tab-pane fade show active" id="revenue-for-last-month" role="tabpanel" aria-labelledby="revenue-for-last-month-tab">
														<div class="d-lg-flex justify-content-between">
															<p class="mb-4">+27,6% em relação aos últimos 6 meses</p>
															<div id="revenuechart-legend" class="revenuechart-legend">f</div>
														</div>
														<canvas id="revenue-for-last-month-chart"></canvas>
													</div>
													<div class="tab-pane fade" id="server-loading" role="tabpanel" aria-labelledby="server-loading-tab">
														<div class="d-flex justify-content-between">
															<p class="mb-4">+25,6% em relação aos últimos 6 meses</p>
															<div id="serveLoading-legend" class="revenuechart-legend">f</div>
														</div>
														<canvas id="serveLoading"></canvas>
													</div>
													<div class="tab-pane fade" id="data-managed" role="tabpanel" aria-labelledby="data-managed-tab">
														<div class="d-flex justify-content-between">
															<p class="mb-4">+12% em relação aos últimos 12 meses</p>
															<div id="dataManaged-legend" class="revenuechart-legend">f</div>
														</div>
														<canvas id="dataManaged"></canvas>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

<!--Card de casos população-->
						<div class="col-sm-4 flex-column d-flex stretch-card">
							<div class="row flex-grow">
								<div class="col-sm-12 grid-margin stretch-card">
									<div class="card">
										<div class="card-body">
											<div class="row">
												<div class="col-lg-8">
													<h3 class="font-weight-bold text-dark">São Vicente,</h3>
													<p class="text-dark"><?php Estatiticas::dia_semana()?></p>
										
												</div>
											</div>
											<div class="row">
												<div class="col-sm-12 mt-4 mt-lg-0">
													<div class="bg-primary text-white px-4 py-4 card">
														<div class="row">
															<div class="col-sm-6 pl-lg-5">
																<h2><?php Estatiticas::quantidade_pacientes_cadastrados()?></h2>
																<p class="mb-0">Seus pacientes</p>
															</div>
															<div class="col-sm-6 climate-info-border mt-lg-0 mt-2">
																<h2><?php Estatiticas::quantidade_estagiarios_cadastrados()?></h2>
																<p class="mb-0">Seus estagiários</p>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="row pt-3 mt-md-1">
												<div class="col">
													<div class="d-flex purchase-detail-legend align-items-center">
														<div id="circleProgress1" class="p-2"></div>
														<div>
															<p class="font-weight-medium text-dark text-small">Sessões (Pacientes)</p>
															<h3 class="font-weight-bold text-dark  mb-0"><?php Estatiticas::sessaoPacientes(); ?></h3>
														</div>
													</div>
												</div>
												<div class="col">
													<div class="d-flex purchase-detail-legend align-items-center">
														<div id="circleProgress2" class="p-2"></div>
														<div>
															<p class="font-weight-medium text-dark text-small">Usuários (Estagiários)</p>
															<h3 class="font-weight-bold text-dark  mb-0"><?php Estatiticas::sessaoEstagiarios();?></h3>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

<!--Card de casos população-->
								<div class="col-sm-12 grid-margin stretch-card">
									<div class="card">
										<div class="card-body">
											<div class="row">
												<div class="col-sm-12">
													<div class="d-flex align-items-center justify-content-between">
														<h4 class="card-title mb-0">Total de dados:</h4>	
													</div>
													<p class="mt-1">Calculado nos útimos 6 meses</p>
													<div class="d-lg-flex align-items-center justify-content-between">
														<h1 class="font-weight-bold text-dark">532</h1>
													</div>
													<canvas id="visitorsToday"></canvas>
												</div>
											</div>
										</div>
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
		</div>
    </div>

	<!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
	  <script src="vendors/base/vendor.bundle.base.js"></script>
		<script src="vendors/justgage/raphael-2.1.4.min.js"></script>
		<script src="vendors/justgage/justgage.js"></script>
		<script src="vendors/progressbar.js/progressbar.min.js"></script>
    <script src="vendors/chart.js/Chart.min.js"></script>
	  <script src="js/template.js"></script>
    
    <script src="js/jquery.cookie.js" type="text/javascript"></script>
    <script src="js/dashboard.js"></script>
  </body>
</html>
<script>
	if ($('#circleProgress1').length) {
			var bar = new ProgressBar.Circle(circleProgress1, {
				color: '#0aadfe',
				strokeWidth: 10,
				trailWidth: 10,
				easing: 'easeInOut',
				duration: 1400,
				width: 43,
			});
			bar.animate(.<?php echo Estatiticas::sessaoPacientes(); ?>); 
		}
			if ($('#circleProgress2').length) {
			var bar = new ProgressBar.Circle(circleProgress2, {
				color: '#fa424a',
				strokeWidth: 10,
				trailWidth: 10,
				easing: 'easeInOut',
				duration: 1400,
				width: 42,

			});
			bar.animate(.<?php echo Estatiticas::sessaoEstagiarios();?>); 
		}	
</script>