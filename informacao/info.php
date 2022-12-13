<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
  <link rel="shortcut icon" href="./images/agenda.ico" type="image/x-icon">
	<title>agenda.me</title>

	<!-- Fonts do Google -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;400;600&display=swap" rel="stylesheet">

	<!-- AOS Lib / Bibliotecas -->
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

	<!-- CSS -->
	<link rel="stylesheet" href="./css/rodape.css">
  <link rel="stylesheet" href="./css/responsive.css">
  <link rel="stylesheet" href="./css/carousel.css">

	<!-- Icones / AOS Lib / Bibliotecas -->
	<script src="https://kit.fontawesome.com/bfb7599492.js" crossorigin="anonymous"></script>

	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>

<body>
<!-- Header / Navigation -->
	<header>
		<div class="logo">
      <a href="#"><img class="logo-agendame "src="images/logoSF.png" alt="" width="185px" height="185px">
        </div>
        <nav class="navigation-bar">
            <div class="home">
              <a href="http://localhost/agenda.me/">Início</a>
            </div>
            <div class="history-nav">
              <a href="../informacao/info.inicio.php#contact">Contato</a>
            </div>
            <div class="news">
              <a href="../informacao/info.inicio.php">Curiosidades</a>
            </div>
        </nav>
  </header>

<!-- Home -->
  <section class="home-agenda" id="Home">
    <img src="images/principal.png">
      <div class="content" data-aos="fade-up">
        <div class="quote">
          <blockquote>
            Tente uma, duas, três vezes e se possível tente a quarta, a quinta e quantas vezes for necessário. Só não desista nas primeiras tentativas, a persistência é amiga da conquista. Se você quer chegar aonde a maioria não chega, faça o que a maioria não faz.
          </blockquote>
        </div>
        <h2 class="welcome">SOBRE O AGENDA.ME</h2>
      </div>
  </section>
  
<!-- HOME CARD-->
  <section class="history-agenda" id="historia">
    <div data-aos="fade-right" class="card">
      <div class="history-text">
        <h1>agenda.me</h1>
        <ul>
          <li>Democratizamos o acesso ao atendimento psicológico em qualquer hora, de que qualquer lugar.</li>
          <li>Atendimento online, aumentando seu retorno financeiro e reduzindo custos fixos.</li>
          <li>Possibilitar aos psicólogos um serviço flexível e prático, em ambiente seguro e com todas as ferramentas necessárias para o seu trabalho.</li>
          <li>Disponibilizando atendimento imédiato.</li>
          <li>O CVV – Centro de Valorização da Vida realiza apoio emocional 24 horas todos os dias.</li>
          <li>Atendimento como preferir, e-mail, chat, whatsapp e com psicólogos nos consultórios.</li>
        </ul>
      </div>
      <div class="history-image">
        <img src="images/pacservico.png" alt="">
      </div>
    </div>
    </div>
    <div data-aos="fade-left" class="card" id="priva">
      <div class="history-text">
        <h1>Nossa História</h1>
          <p>Com a chegada da pandemia de COVID-19 em 2020, houve um grande crescimento na procura da população por serviços psicológicos e psiquiátricos. Muitas pessoas consideradas de baixa renda não possuem, na maioria das vezes, condições de ter acompanhamento psicológico de forma particular. Dadas as situações, a proposta é um site de agendamento e acompanhamento dos atendimentos, construída para que haja melhor organização da universidade e que seja dinâmico para o paciente, promovendo que as pessoas de baixa renda tenham atendimentos com preços acessíveis ou de forma gratuita em universidades que possuem clínicas-escolares de psicologia, onde a população é atendida pelos ex alunos formados e estudantes que estão prestes a adquirir a graduação.</p><br>
          <p>Os pontos abordados no trabalho foram baseados nos principais números apresentados por organizações de saúde, além de pesquisas realizadas junto às universidades e suas clínicas. Tais informações tiveram por propósito agregar todos os métodos no desenvolvimento da pesquisa para a construção do site.</p><br>
          <p class="d-inline"><strong>Aviso</strong>: Além disso, apresentou-se em visita a universidade Unisantos que ocorreu o aumento na procura por este atendimento e com as pesquisas de campo realizada com a população verificou-se que existe uma falha no meio de comunicação da universidade e população deixando assim este trabalho ainda mais necessário nesse cenário pós pandemia. Trazendo a chegada da plataforma AgendaMe para  solução do problema e ajudando a sociedade.
        <center><h5>Não Desista agenda.me está com você :)</h5></center>
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

<!--Carousel-->
<section id="projects">
    <h1>Equipe de Desenvolvedores</h1>
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="project-img">
            <img src="./images/marcelo.jpeg" alt="Foto de perfil">
            <h3>Front-End</h3>
          </div>
          <div class="project-info">
              <h1>MARCELO BERNARDO DOS SANTOS</h1>
              <p>Meu nome é Marcelo Bernardo dos Santos tenho 18 anos, atualmente cursando Ensino Médio pela Escola Estadual Canadá e Técnico em Desenvolvimento de sistemas pela ETEC Ruth Cardoso, pretendo trabalhar com alguma área relacionada a TI, pois é algo que me interesso desde criança.</p>
            </div>
            <a href="https://github.com/Celo07" target="_blank"> <img class="logoGithub" src="https://img.icons8.com/ios-filled/50/000000/github.png" height="40" width="40"> </a>
  
            <a href="https://www.linkedin.com/in/marcelo-bernardo-3b8231208/" target="_blank"> <img class="logoLinkedin" src="https://img.icons8.com/fluency/48/000000/linkedin.png" height="45" width="45"> </a>
        </div>
        <div class="swiper-slide">
          <div class="project-img">
            <img src="./images/willian.jpeg" alt="Foto de perfil">
            <h3>Front-End</h3>
          </div>
          <div class="project-info">
            <h1>WILLIAN NICOMEDES</h1>
            <p>Tenho 21 anos e trabalho em equipe e mediante aos cursos de informática e manutenção e reparo de hardware, perfazendo Técnico de Desenvolvimento de Sistemas e logística, com conhecimentos básicos em segurança do trabalho que envolve as atividades e motivação para alcançar os objetivos e metas estipuladas.</p>
          </div>
          <a href="https://github.com/WillianNicomedes?tab=followers" target="_blank"> <img class="logoGithub" src="https://img.icons8.com/ios-filled/50/000000/github.png" height="40" width="40"> </a>

          <a href="https://www.linkedin.com/in/willian-nicomedes-7b91b6218/" target="_blank"> <img class="logoLinkedin" src="https://img.icons8.com/fluency/48/000000/linkedin.png" height="45" width="45"> </a>
        </div>
        <div class="swiper-slide">
          <div class="project-img">
            <img src="./images/valeriaa.png" alt="Foto de perfil">
            <h3>Front-End</h3>
            <h3>Documentação</h3>
          </div>
          <div class="project-info">  
            <h1>VALÉRIA DO NASCIMENTO FERREIRA</h1>
            <p>Valéria Ferreira, 26 anos.
              Atualmente cursando Desenvolvimento de Sistemas pela Etec Ruth Cardoso, formada em Comércio pela Etec Dr. Nelson Alves Vianna e em Gestão e Negócios pelo Senac.</p>
          </div>
          <a href="https://github.com/valeria-ferreira" target="_blank"> <img class="logoGithub" src="https://img.icons8.com/ios-filled/50/000000/github.png" height="40" width="40"> </a>

          <a href="https://www.linkedin.com/in/valeria-nascimento-ferreira/" target="_blank"> <img class="logoLinkedin" src="https://img.icons8.com/fluency/48/000000/linkedin.png" height="45" width="45"> </a>      
        </div>
        <div class="swiper-slide">
          <div class="project-img">
            <img src="./images/kaua.jpeg" alt="Foto de perfil">
            <h3>Back-End</h3>
          </div>
          <div class="project-info">
            <h1>KAUÃ VINÍCIOS CRUZ BEZERRA</h1>
            <p>Tenho 17 anos, atualmente cursando Ensino Médio e Técnico em Desenvolvimento de sistemas pela ETEC Ruth Cardoso, pretendo trabalhar com alguma área relacionada a T.I e aprimorando os conhecimentos na área do back-end.</p>
          </div>
          <a href="#" target="_blank"> <img class="logoGithub" src="https://img.icons8.com/ios-filled/50/000000/github.png" height="40" width="40"> </a>

          <a href="#" target="_blank"> <img class="logoLinkedin" src="https://img.icons8.com/fluency/48/000000/linkedin.png" height="45" width="45"> </a> </a>          
        </div>
        <div class="swiper-slide">
          <div class="project-img">
            <img src="./images/yohans.jpeg" alt="Foto de perfil">
            <h3>Back-End</h3>
          </div>
          <div class="project-info">
            <h1>YOHANS SILVA BEZERRA</h1>
            <p>Tenho 20 anos, atualmente cursando Técnico em Desenvolvimento de sistemas pela ETEC Ruth Cardoso, pretendo trabalhar com alguma área relacionada a T.I que seja relacionada a tecnologia, com facilidade para os conhecimentos de lógica na área do back-end.</p>
          </div>
          <a href="#" target="_blank"> <img class="logoGithub" src="https://img.icons8.com/ios-filled/50/000000/github.png" height="40" width="40"> </a>

          <a href="#" target="_blank"> <img class="logoLinkedin" src="https://img.icons8.com/fluency/48/000000/linkedin.png" height="45" width="45"> </a>
        </div>
      </div>
    
<!--Carousel Plugin-->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
  </div>
</section>

<!--API Whatsapp-->
      <div class="whats">
      <a class="whatsapp-link" href="https://wa.me/5513991299999?text=Olá cliente! Tudo bem?" target="_blank">
		      <i class="fa fa-whatsapp"></i>
	      </a>
      </div>

<!--Rodapé-->
<footer>
    <div class="footer-content">
        <div class="referencias">
            <h3>Site</h3>
            <ul>
              <li><a href="../informacao/info.inicio.php">Termos de Uso</a></li>
              <li><a href="https://site.cfp.org.br/wp-content/uploads/2012/07/codigo_etica.pdf">Código de Ética</a></li>
              <li><a href="../informacao/info.inicio.php">Política de Privacidade</a></li>
            </ul>
          </div>

      <div class="referencias">
        <h3>Equipe</h3>
        <ul>
          <li><a href="../informacao/info.inicio.php">Contatos</a></li>
          <li><a href="../informacao/info.php">Desenvolvedores</a></li>
          <li><a href="http://localhost/agenda.me/#missao">Missão, Visão e Valores</a></li>
        </ul>
      </div>

      <div class="referencias">
        <h3>Explore</h3>
        <ul>
          <li><a href="http://localhost/agenda.me/#">Cadastro</a></li>
          <li><a href="../informacao/info.php">Depoimentos</a></li>
          <li><a href="http://localhost/agenda.me/#servico">Buscar Consultórios</a></li>
        </ul>
      </div>

<!--Logo rodapé-->
      <div class="pages">
        <img class="logo-agendame "src="images/logoSF.png" alt="" width="185px" height="185px">
      </div>
    </div>
    <center><font color="#FFFAFA"><p>Copyright © 2022 agenda.me Todos os direitos reservados</p></font></center>
  </footer>
  <script>
    AOS.init(); 
  </script> 

<!--Javascript-->
   <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
   <script src="./js/script.js"></script>
</body> 
</html>