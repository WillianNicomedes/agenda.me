<?php
    $idContato = mysqli_real_escape_string($conexao,$_POST["idContato"]); 
    $nomeContato = mysqli_real_escape_string($conexao,$_POST["nomeContato"]); 
    $emailContato = mysqli_real_escape_string($conexao,$_POST["emailContato"]); 
    $telefoneContato = mysqli_real_escape_string($conexao,$_POST["telefoneContato"]); 
    $enderecoContato = mysqli_real_escape_string($conexao,$_POST["enderecoContato"]); 
    $sexoContato = mysqli_real_escape_string($conexao,$_POST["sexoContato"]); 
    $dataNascContato = mysqli_real_escape_string($conexao,$_POST["dataNascContato"]); 

    $sql = "UPDATE tbcontatos SET
    nomeContato = '{$nomeContato}',
    emailContato = '{$emailContato}',
    telefoneContato = '{$telefoneContato}',
    enderecoContato = '{$enderecoContato}',
    sexoContato = '{$sexoContato}',
    dataNascContato = '{$dataNascContato}'
    WHERE idContato = '{$idContato}'
    ";
    mysqli_query($conexao,$sql) or die("Erro ao executar a consulta. " . mysqli_error($conexao));

    $rs = mysqli_query($conexao,$sql);

if($rs){
    ?>
    <div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Contato cadastrado:</h4>
  <p>O registro foi atualizado com sucesso!</p>
  <hr>
  <div>
    <a class="btn btn-outline-danger mb-2" 
    href="admin.php?menuop=contatos"><i class="bi bi-list-task"></i> Voltar para contatos</a>
  </div>
</div>

  <?php
}else{
    ?>
<div class="alert alert-danger" role="alert">
  <h4 class="alert-heading">Erro: Contato preenchido indevidamente!</h4>
  <p>O contato não pode ser inserido!</p>
  <hr>
  <div>
    <a class="btn btn-outline-danger mb-2" 
    href="admin.php?menuop=contatos"><i class="bi bi-list-task"></i> Tentar novamente</a>
  </div>
</div>
  <?php
}
?>