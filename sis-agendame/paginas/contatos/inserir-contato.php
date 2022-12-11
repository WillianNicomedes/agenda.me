<?php
    $nomeContato = strip_tags( mysqli_real_escape_string($conexao,$_POST["nomeContato"])); 
    $emailContato = strip_tags( mysqli_real_escape_string($conexao,$_POST["emailContato"])); 
    $telefoneContato = strip_tags( mysqli_real_escape_string($conexao,$_POST["telefoneContato"])); 
    $enderecoContato = strip_tags( mysqli_real_escape_string($conexao,$_POST["enderecoContato"])); 
    $sexoContato = strip_tags( mysqli_real_escape_string($conexao,$_POST["sexoContato"])); 
    $dataNascContato = strip_tags( mysqli_real_escape_string($conexao,$_POST["dataNascContato"])); 

    $sql = "INSERT INTO tbcontatos (
        nomeContato,
        emailContato,
        telefoneContato,
        enderecoContato,
        sexoContato,
        dataNascContato
    )
    VALUES (
        '{$nomeContato}',
        '{$emailContato}',
        '{$telefoneContato}',
        '{$enderecoContato}',
        '{$sexoContato}',
        '{$dataNascContato}'
        )    
    ";

    $rs = mysqli_query($conexao,$sql);

if($rs){
  ?>
    <div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Inserir Contato:</h4>
  <p>O registro foi inserido com sucesso!</p>
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
  <p>Contato não pode ser inserido!</p>
  <hr>
  <div>
    <a class="btn btn-outline-danger mb-2" 
    href="paciente.php?menuop=cad-contato"><i class="bi bi-list-task"></i> Tentar novamente</a>
  </div>
</div>
  <?php
}
?>