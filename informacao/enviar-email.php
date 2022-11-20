<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="shortcut icon" href="./images/agenda.ico" type="image/x-icon">
  <title>agenda.me</title>
</head>
<body>
  
<?php
  //Variáveis
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $mensagem = $_POST['mensagem'];
  $telefone = $_POST['telefone'];
  $data_envio = date('d/m/Y');

  //Compo E-mail
  $arquivo = "
    <html>
      <p><b>Nome: </b>$nome</p>
      <p><b>E-mail: </b>$email</p>
      <p><b>Mensagem: </b>$mensagem</p>
      <p><b>Telefone: </b>$telefone</p>
      <p>Este e-mail foi enviado em <b>$data_envio</b></p>
    </html>
  ";
  
  //Emails para quem será enviado o formulário
  $destino = "agenda.me1031@gmail.com";
  $assunto = "Contato pelo Site - agenda.me (Suporte)";

  //Este sempre deverá existir para garantir a exibição correta dos caracteres
  $headers  = "MIME-Version: 1.0\n";
  $headers .= "Content-type: text/html; charset=iso-8859-1\n";
  $headers .= "From: $nome <$email>";

  //Enviar
  if(mail($destino, $assunto, $arquivo, $headers)){
  
  echo "<meta http-equiv='refresh' content='10;URL=../informacao/info.inicio.php#contact'>";

?>
<center><div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Formulário enviado com sucesso!</h4>
  <p>Em processamento...(aguarde)</p>
  <hr>
</div></center>

<?php
}else{
?>
<center><div class="alert alert-danger" role="alert">
  <h4 class="alert-heading">Erro: Formulário preenchido indevidamente!</h4>
  <p>O formulário não pode ser enviado!</p>
  <hr>
  <div>
    <a class="btn btn-outline-danger mb-2" 
    href="../informacao/info.inicio.php#contact"><i class="bi bi-list-task"></i> Tentar novamente</a>
  </div>
</div><center>
<?php
}
?>

<!--Javascript geral do sistema-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>