<?php 
require_once('./class/config.php');
require_once('./calendario/evento/action/conexao.php');
require_once('autoload.php');

if(isset($_POST['senha'])&& isset($_POST['email']) && !empty($_POST['email']) && !empty($_POST['senha'])&& !empty($_POST['opcao'])&&isset($_POST['opcao'])){
    $email = limpaString($_POST['email']);
    $senha = limpaString($_POST['senha']);
    $opcao = $_POST['opcao'];
    $conexao = new Database;
    $login = new Login($conexao->conectar());
    $login-> pegarEmailEsenha($email,$senha,$opcao);
}

//VERIFICAR SE EXISTE O POST COM TODOS OS DADOS
if (isset($_POST['senha'])&& isset($_POST['email'])&&isset($_POST['nome'])&&isset($_POST['rg'])&&isset($_POST['cpf'])){
    //RECEBER VALORES VINDOS DO POST E LIMPAR
      $nome = limpaString($_POST['nome']);
      $senha = limpaString($_POST['senha']);
      $email = limpaString($_POST['email']);
      $telefone = limpaString($_POST['telefone']);
      $genero = limpaString($_POST['genero']);
      $dt_nasc = $_POST['data_nascimento'];
      $rg = limpaString($_POST['rg']);
      $cpf = limpaString($_POST['cpf']);
      $endereco = limpaString($_POST['endereco']);
   
    //VERIFICAR SE VALORES VINDOS DO POST NÃO ESTÃO VAZIOS
    if(empty($nome) or empty($email) or empty($telefone) or empty($genero)
    or empty($dt_nasc) or empty($cpf) or empty($rg) or empty($senha) or empty($endereco)){
        $erro_geral = "Todos os campos são obrigatórios!";
        
    }else{
        //INSTANCIAR A CLASSE USUARIO
        $conexao = new Database;
        
        $usuario = new Usuario($nome,$email,$senha,$telefone,$genero,$cpf,$rg,$dt_nasc,$endereco,$conexao->conectar());
        //VALIDAR O CADASTRO
        $usuario->validar_cadastro();

        //SE NÃO TIVER NENHUM ERRO - ESTÁ VAZIO ERROS
        if(empty($usuario->erro)){
            //INSERIR
            if($usuario->insertPaciente()){
                header('location:index.php');
               // header('location: cadastrar.php');//
            }else{
                //DEU ERRADO - ERRO GERAL
         
            }
        }
    }
}


  if(isset($_POST['cnpj'])&&isset($_POST['senha']) && isset($_POST['nm_fantasia'])&& isset($_POST['nm_rz_social'])&& isset($_POST['endereco'])&& isset($_POST['telefone'])&& isset($_POST['email_universiade']))
  {
    $cnpj = limpaString($_POST['cnpj']);
    $nm_fantasia = limpaString($_POST['nm_fantasia']);
    $nm_rz_social = limpaString($_POST['nm_rz_social']);
    $endereco = limpaString($_POST['endereco']);
    $telefone = limpaString($_POST['telefone']);
    $email_universiade = limpaString($_POST['email_universiade']); 
    $senha = limpaString($_POST['senha']);

    if(empty($cnpj)&&empty($nm_fantasia)&&empty($nm_rz_social)&&empty($endereco)&&empty($telefone)&&empty($email_universiade)&&empty($senha))
    {
    
    }else{
      $Universidade = new Universidade($cnpj,$nm_fantasia,$senha,$nm_rz_social,$endereco,$telefone,$email_universiade);
      $Universidade->insertUniversidade();
    }
  }
 
?>

<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>agenda.me</title>

    <!--Favicons-->
    <!--===============================================-->
    <link rel="shortcut icon" href="principal/assets/img/gallery/agenda.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&amp;family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100&amp;display=swap" rel="stylesheet">

    <!--Stylesheets-->
    <!--===============================================-->
    <link href="principal/assets/css/style.css" rel="stylesheet" />
  </head>
  <body>

<!--Navegação do site-->
    <main class="main" id="top">
      <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3 d-block" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container"><a class="navbar-brand" href="index.php"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"> </span></button>
          <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto pt-2 pt-lg-0 font-base">
              <li class="nav-item px-2"><a class="nav-link" aria-current="page" href="#">Início</a></li>
              <li class="nav-item px-2"><a class="nav-link" href="#sobre">Quem Somos</a></li>
              <li class="nav-item px-2"><a class="nav-link" href="#servico">Serviços</a></li>
              <li class="nav-item px-2"><a class="nav-link" href="#missao">Missão</a></li>
            </ul>
            <a class="btn btn-sm btn-outline-primary rounded-pill order-1 order-lg-0 ms-lg-4" onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-green w3-large">Entrar</a>
            <a class="btn btn-sm btn-outline-primary rounded-pill order-1 order-lg-0 ms-lg-4" onclick="document.getElementById('id02').style.display='block'" class="w3-button w3-green w3-large">Inscreva-se</a>
          </div>
        </div>
      </nav>

<!-- LOGIN !-->
<div class="w3-container">
  <div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

      <div class="w3-center"><br>
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
      </div>

      <form class="w3-container" action="" method="POST">
        <div class="w3-section">
          <label><b>Digite seu e-mail:</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Digite seu e-mail" name="email" required>
          <label><b>Digite sua senha:</b></label>
          <input class="w3-input w3-border" type="password" placeholder="Digite sua senha" name="senha" required>
          <div class="text-center pt-1 text-muted">Selecione uma opção de login abaixo:</div>

          <input type="radio" id="universidade" name="opcao" value="universidade" required>
          <label for="universidade">Universidade</label><br>

          <input type="radio" id="estagiario" name="opcao" value="estagiario" required>
          <label for="estagiario">Estagiário</label><br>

          <input type="radio" id="paciente" name="opcao" value="tbcontatos" required>
          <label for="paciente">Paciente</label>

          <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit">Entrar</button>
        </div>
      </form>

      <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
        <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-button w3-red">Cancelar</button>
        <span class="w3-right w3-padding w3-hide-small">Esqueceu a <a href="#">senha?</a></span>
      </div>
    </div>
  </div>
</div>

<!-- Cadastro de acessos !-->
<div class="w3-container">
  <div id="id02" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:400px">

      <div class="w3-center"><br>
        <span onclick="document.getElementById('id02').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
      </div>

      <form class="w3-container" action="" method="POST">
        <div class="w3-section">
          <div class="text-center pt-1 text-muted">Selecione uma opção de cadastro abaixo:</div><br>

          <label for="universidade">Paciente</label>
          
          <a class="btn btn-sm btn-outline-primary rounded-pill order-1 order-lg-0 ms-lg-4" onclick="document.getElementById('id05').style.display='block'" class="w3-button w3-green w3-large">Inscreva-se</a>
          <br><br>

          <label for="universidade">Universidade</label>
          
          <a class="btn btn-sm btn-outline-primary rounded-pill order-1 order-lg-0 ms-lg-4" onclick="document.getElementById('id04').style.display='block'" class="w3-button w3-green w3-large">Inscreva-se</a>
          <br><br>
        
        </div>
      </form>

      <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
        <button onclick="document.getElementById('id02').style.display='none'" type="button" class="w3-button w3-red">Cancelar</button>
      </div>
    </div>
  </div>
</div>

<!-- CADASTRO DE PACIENTE !-->
<div class="w3-container">
  <div id="id05" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

      <div class="w3-center"><br>
        <span onclick="document.getElementById('id05').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
      </div>

      <form class="w3-container" action="" method="POST">
        <div class="w3-section">
        <div class="box">
        <form  method="POST">
            <fieldset>
                <legend><b>Cadastro de Paciente</b></legend>
                <br><br>
                <div class="inputBox">
                    <label for="nome" class="labelInput">Nome completo:</label>
                    <br>
                    <input type="text" name="nome" id="nome" class="labelInput" placeholder="Digite seu nome" maxlength="50" required>
                </div>

                <br>

                <div class="inputBox">
                  <label for="senha" class="labelInput">Senha:</label>
                  <br>
                  <input type="password" name="senha" id="senha" class="labelInput" placeholder="Digite sua senha" maxlength="30" required>
                </div>

                <br>

                <div class="inputBox">
                  <label for="email" class="labelInput">Endereço:</label>
                  <br>
                  <input type="text" name="endereco" id="endereco" class="labelInput" placeholder="Digite seu endereço" maxlength="50" required>
                </div>

                <br>

                <div class="inputBox">
                  <label for="email" class="labelInput">E-mail:</label>
                  <br>
                  <input type="email" name="email" id="email" class="labelInput" placeholder="Digite seu e-mail" maxlength="50" required>
                </div>

                <br>

                <div class="inputBox">
                  <label for="telefone" class="labelInput">Telefone:</label>
                  <br>
                  <input type="text" name="telefone" id="telefone" class="labelInput" placeholder="Digite seu telefone" maxlength="14" required>
                </div>
                
                <br>

                <p>Sexo:</p>
                    <input type="radio" id="feminino "name="genero" value="F" required>
                    <label for="Feminino">Feminino</label><br>
                    <input type="radio" id="masculino "name="genero" value="M" required>
                    <label for="masculino">Masculino</label><br>
                    <input type="radio" id="outro "name="genero" value="O" required>
                    <label for="outro">Outro</label>
                    <br>

                    <label for="data_nascimento"><b>Data de nascimento:</b> </label>
                    <input type="date" name="data_nascimento" id="data_nascimento" required>
                
                <div class="inputBox">
                  <label for="rg" class="labelInput">RG:</label>
                  <br>
                  <input type="text" name="rg" id="rg" class="labelInput" placeholder="Digite seu RG" maxlength="9" required>
                </div>    

                <br>

                <div class="inputBox">
                  <label for="cpf" class="labelInput">CPF:</label>
                  <br>
                  <input type="text" name="cpf" id="cpf" class="labelInput" placeholder="Digite seu CPF" maxlength="11" required>
                </div>

                <br>

                <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
                   <button onclick="document.getElementById('id05').style.display='none'" type="button" class="w3-button w3-red">Cancelar</button>
                   <span class="w3-right w3-hide-small"><input type="submit" name="submit" id="submit"  class="w3-button w3-green"></span></span>
                </div>
            </fieldset>
         </form>
      </div>
     </div>  
    </div>
  </div>
</div>

<!-- CADASTRO DE UNIVERSIDADE !-->
<div class="w3-container">
  <div id="id04" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

      <div class="w3-center"><br>
        <span onclick="document.getElementById('id04').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
      </div>

      <form class="w3-container" action="" method="POST">
        <div class="w3-section">
        <div class="box">
        <form  method="POST">
            <fieldset>
                <legend><b>Cadastro de Universidade</b></legend>
                <br><br>
                <div class="inputBox">
                  <label for="nm_fantasia" class="labelInput">Nome fantasia:</label>
                  <br>
                  <input type="text" name="nm_fantasia" id="nm_fantasia" class="labelInput" placeholder="Digite nome fatansia" maxlength="50" required>
                </div>

                <br>

                <div class="inputBox">
                    <label for="cnpj" class="labelInput">CNPJ:</label>
                    <br>
                    <input type="number" name="cnpj" id="cnpj" class="labelInput" placeholder="Digite seu cnpj" maxlength="100" required>
                </div>

                <br>

                <div class="inputBox">
                  <label for="nm_rz_social" class="labelInput">Razão social:</label>
                  <br>
                  <input type="text" name="nm_rz_social" id="nm_rz_social" class="labelInput" placeholder="Digite Razão social" maxlength="50" required>
                </div>

                <br>

                <div class="inputBox">
                  <label for="endereco" class="labelInput">Endereço:</label>
                  <br>
                  <input type="text" name="endereco" id="endereco" class="labelInput" placeholder="Digite seu endereço" maxlength="100" required>
                </div>

                <br>

                <div class="inputBox">
                  <label for="telefone" class="labelInput">Telefone:</label>
                  <br>
                  <input type="text" name="telefone" id="telefone" class="labelInput" placeholder="Digite seu telefone" maxlength="14" required>
                </div>

                <br>

                <div class="inputBox">
                  <label for="email_universiade" class="labelInput">E-mail:</label>
                  <br>
                  <input type="email" name="email_universiade" id="email_universiade" class="labelInput" placeholder="Digite seu e-mail" maxlength="100" required>
                </div>

                <br>

                <div class="inputBox">
                  <label for="senha" class="labelInput">Senha:</label>
                  <br>
                  <input type="password" name="senha" id="senha" class="labelInput" placeholder="Digite sua senha" maxlength="30" required>
                </div>
                
                <br>

                <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
                   <button onclick="document.getElementById('id04').style.display='none'" type="button" class="w3-button w3-red">Cancelar</button>
                   <span class="w3-right w3-hide-small"><input type="submit" name="submit" id="submit"  class="w3-button w3-green"></span></span>
                </div>
            </fieldset>
         </form>
      </div>
     </div>  
    </div>
  </div>
</div>

<!--Início Agendar Agora e texto-->
      <section class="py-xxl-10 pb-0" id="home">
        <div class="bg-holder bg-size" style="background-image:url(principal/assets/img/gallery/hero-bg.png);background-position:top center;background-size:cover;">
        </div>
        <div class="container">
          <div class="row min-vh-xl-100 min-vh-xxl-25">
            <div class="col-md-5 col-xl-6 col-xxl-7 order-0 order-md-1 text-end"><img class="pt-7 pt-md-0 w-100" src="principal/assets/img/gallery/hero.png" alt="hero-header" /></div>
            <div class="col-md-75 col-xl-6 col-xxl-5 text-md-start text-center py-6">
              <h1 class="fw-light font-base fs-6 fs-xxl-7">agenda<strong>.me</strong><br>Consultas psicológicas de forma acessível</strong></h1>
              <p class="fs-1 mb-5">Agende sua consulta presencial a qualquer hora, com total sigilo e segurança através do nosso site.</p><a class="btn btn-lg btn-primary rounded-pill" onclick="document.getElementById('id02').style.display='block'" class="w3-button w3-green w3-large" role="button" target="_blank">Criar uma conta</a>
            </div>
          </div>
        </div>
      </section>

<!--Quem Somos AgendaMe-->
      <section class="bg-secondary" id="sobre">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-5 col-xxl-6"><img class="img-fluid" src="principal/assets/img/gallery/backgHeader.png" alt="..." /></div>
            <div class="col-md-7 col-xxl-6 text-center text-md-start">
              <h2 class="fw-bold text-light mb-4 mt-4 mt-lg-0">Conheça nossa plataforma<br class="d-none d-sm-block"/>agenda.me</h2>
              <p class="text-light">Nossa plataforma consta com diversas funcionalidades de agendamento<br class="d-none d-sm-block"/>Chat, E-mail, Whatsapp e Ligação. Em caso de emergência<br class="d-none d-sm-block"/>CVV, apoio emocional com funcionamento 24 horas todos os dias, para realizar um acompanhento com um dos voluntários simpáticos e dipostos a ajudar.</p>
              <div class="py-3"><a class="btn btn-lg btn-light rounded-pill" href="../agenda.me/informacao/info.inicio.php" role="button">SAIBA MAIS</a></div>
            </div>
          </div>
        </div>
      </section>

<!--Consultório Universidade-->
      <section class="pb-0" id="servico">
        <div class="container">
          <div class="row">
            <div class="col-12 py-3">
              <h1 class="text-center">SOBRE CONSULTÓRIOS</h1>
            </div>
          </div>
        </div>
      </section>

      <section class="py-5">
        <div class="bg-holder bg-size" style="background-image:url(principal/assets/img/gallery/about-bg.png);background-position:top center;background-size:contain;">
        </div>
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-6 order-lg-1 mb-5 mb-lg-0"><img class="fit-cover rounded-circle w-100" src="principal/assets/img/gallery/psicologia.jpg" alt="..." /></div>
            <div class="col-md-6 text-center text-md-start">
              <h2 class="fw-bold mb-4">CLÍNICA DE PSICOLOGIA<br class="d-none d-sm-block"/></h2>
              <p>A Clínica de Psicologia é considerada referência, na região, pelos serviços que presta à população em geral, no tratamento da saúde mental. Os serviços oferecidos, que são ligados ao Curso de Psicologia, são de psicoterapia individual, familiar e grupal. Há, ainda, os grupos de atendimento aos pais e a crianças e jovens.<br class="d-none d-sm-block"/></p>
              <div class="py-3">
                <a href="https://www.cvv.org.br/" target="_blank"><button class="btn btn-lg btn-outline-primary rounded-pill" type="submit">SAIBA MAIS</button></a>
              </div>
            </div>
          </div>
        </div>
      </section>

<!--Carrousel-->
      <section class="py-5" id="missao">
        <div class="container">
          <div class="row">
            <div class="col-12 py-3">
              <h1 class="text-center">MISSÃO, VISÃO E VALORES</h1>
            </div>
          </div>
        </div>
      </section>
   
      <section class="py-8">
        <div class="bg-holder bg-size" style="background-image:url(principal/assets/img/gallery/people-bg-1.png);background-position:center;background-size:cover;">
        </div>
        <div class="container">
          <div class="row align-items-center offset-sm-1">
            <div class="carousel slide" id="carouselPeople" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                  <div class="row h-100">
                    <div class="col-sm-3 text-center">
                      <h5 class="mt-3 fw-medium text-secondary">Ajudar as pessoas e empresas.</h5>
                    </div>
                    <div class="col-sm-9 text-center text-sm-start pt-3 pt-sm-0">
                      <h2>MISSÃO!</h2>
                      <div class="my-2"><i class="fas fa-star me-2"></i><i class="fas fa-star me-2"></i><i class="fas fa-star me-2"></i><i class="fas fa-star-half-alt me-2"></i><i class="far fa-star"></i></div>
                      <p>Desenvolver um software inteligente para levar inspiração e inovação. Facilitando a gestão nos consultórios universitários e melhorando o estágio dos alunos. Aumentando assim o número de atendimentos e a procura por cursos nas áreas da saúde.</p>
                    </div>
                  </div>
                </div>
                <div class="carousel-item" data-bs-interval="5000">
                  <div class="row h-100">
                    <div class="col-sm-3 text-center">
                      <h5 class="mt-3 fw-medium text-secondary">Mudar o mundo através da tecnologia.</h5>
                    </div>
                    <div class="col-sm-9 text-center text-sm-start pt-3 pt-sm-0">
                      <h2>VISÃO!</h2>
                      <div class="my-2"><i class="fas fa-star me-2"></i><i class="fas fa-star me-2"></i><i class="fas fa-star me-2"></i><i class="fas fa-star-half-alt me-2"></i><i class="far fa-star"></i></div>
                      <p>População satisfeita com o aumento da qualidade do atendimento. Universidade com um aumento nos números de graduados, com uma boa experiencia que foi adquirida através de um estágio educacional incomparável que é intelectual, social e pessoalmente transformador.</p>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="row h-100">
                    <div class="col-sm-3 text-center">
                      <h5 class="mt-3 fw-medium text-secondary">Inovação.</h5>
                      <h5 class="mt-3 fw-medium text-secondary">Cliente no controle.</h5>
                      <h5 class="mt-3 fw-medium text-secondary">Resultados com excelência.</h5>
                    </div>
                    <div class="col-sm-9 text-center text-sm-start pt-3 pt-sm-0">
                      <h2>VALORES!</h2>
                      <div class="my-2"><i class="fas fa-star me-2"></i><i class="fas fa-star me-2"></i><i class="fas fa-star me-2"></i><i class="fas fa-star-half-alt me-2"></i><i class="far fa-star"></i></div>
                      <p>Ética, Empatia, Disciplina, Persistência, Aprendizado.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="position-relative z-index-2 mt-5">
                  <ol class="carousel-indicators">
                    <li class="active" data-bs-target="#carouselPeople" data-bs-slide-to="0"></li>
                    <li data-bs-target="#carouselPeople" data-bs-slide-to="1"></li>
                    <li data-bs-target="#carouselPeople" data-bs-slide-to="2"> </li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

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
<footer>
    <div class="footer-content">
        <div class="referencias">
            <h3>Site</h3>
            <ul>
              <li><a href="../agenda.me/informacao/info.inicio.php">Termos de Uso</a></li>
              <li><a href="https://site.cfp.org.br/wp-content/uploads/2012/07/codigo_etica.pdf">Código de Ética</a></li>
              <li><a href="../agenda.me/informacao/info.inicio.php">Política de Privacidade</a></li>
            </ul>
          </div>

      <div class="referencias">
        <h3>Equipe</h3>
        <ul>
          <li><a href="../agenda.me/informacao/info.inicio.php">Contatos</a></li>
          <li><a href="../agenda.me/informacao/info.php">Desenvolvedores</a></li>
          <li><a href="../agenda.me/#missao">Missão, Visão e Valores</a></li>
        </ul>
      </div>

      <div class="referencias">
        <h3>Explore</h3>
        <ul>
          <li><a href="../agenda.me/#">Cadastro</a></li>
          <li><a href="../agenda.me/informacao/info.php">Depoimentos</a></li>
          <li><a href="../agenda.me/#servico">Buscar Consultórios</a></li>
        </ul>
      </div>

<!--Logo rodapé-->
    <div class="pages">
        <img class="logo-agendame "src="principal/assets/img/gallery/logoSF.png" alt="" width="185px" height="185px">
      </div>
    </div>
      <center><font color="#FFFAFA"><p>Copyright © 2022 agenda.me Todos os direitos reservados</p></font></center>
  </footer>
</main>

    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="principal/vendors/bootstrap/bootstrap.min.js"></script>
    <script src="principal/vendors/is/is.min.js"></script>
    <script src="https://scripts.sirv.com/sirvjs/v3/sirv.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="principal/vendors/fontawesome/all.min.js"></script>
    <script src="principal/assets/js/theme.js"></script>
  </body>
</html>