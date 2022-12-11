<?php
    include("./db/conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="shortcut icon" href="img/agenda.ico" type="image/x-icon">
    <title>Sistema agenda.me</title>
</head>
<body>
<header class="bg-dark">
            <nav class="navbar navbar-expand-lg  navbar-dark" style="background-color: #135B7D;">
                <a href="#" class="navbar-brand"></a>
                <a href="#" class="navbar-brand">
                    <img src="./img/logo.png" alt="sis-agenda.me" width="130" >
                </a>
            </nav>
    </header>
    <main>
   <div class="container">
   <br>

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
    
<?php
    $menuop = (isset($_GET['menuop']))?$_GET['menuop']:'home';
    switch($menuop){
        case 'home':
            include("./paginas/home/home.php");
            break;
        case 'contatos':
            include("./paginas/contatos/contatos.php");
            break;
        case 'cad-contato':
            include("./paginas/contatos/cad-contato.php");
            break;   
        case 'inserir-contato':
                include("./paginas/contatos/inserir-contato.php");
                break;  
        case 'editar-contato':
                include("./paginas/contatos/editar-contato.php");
                break; 
        case 'atualizar-contato':
                include("./paginas/contatos/atualizar-contato.php");
                break;                                       
        case 'excluir-contato':
                include("./paginas/contatos/excluir-contato.php");
                break;  
        case 'tarefas':
            include("./paginas/tarefas/tarefas.php");
            break;       
        case 'cad-tarefa':
            include("./paginas/tarefas/cad-tarefa.php");
            break;       
        case 'inserir-tarefa':
            include("./paginas/tarefas/inserir-tarefa.php");
            break;     
        case 'editar-tarefa':
            include("./paginas/tarefas/editar-tarefa.php");
            break;
        case 'excluir-tarefa':
            include("./paginas/tarefas/excluir-tarefa.php");
            break; 
        case 'atualizar-tarefa':
            include("./paginas/tarefas/atualizar-tarefa.php");
            break;    
        default:
            include("./paginas/home/home.php");
            break;
   }

?>
</div>
    </main>

<!--Javascript geral do sistema-->
    <script src="./js/jquery.js"></script>
    <script src="./js/jquery.form.js"></script>
    <script src="./js/upload.js"></script>
    <script src="./js/javascript-agendador.js"></script>
<!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="./js/validation.js"></script>
</body>
</html>