<?php
    $idTarefa = mysqli_real_escape_string($conexao,$_POST["idTarefa"]); 
    $tituloTarefa = mysqli_real_escape_string($conexao,$_POST["tituloTarefa"]); 
    $descricaoTarefa = mysqli_real_escape_string($conexao,$_POST["descricaoTarefa"]); 
    $dataConclusaoTarefa = mysqli_real_escape_string($conexao,$_POST["dataConclusaoTarefa"]); 
    $horaConclusaoTarefa = mysqli_real_escape_string($conexao,$_POST["horaConclusaoTarefa"]); 
    $dataLembreteTarefa = mysqli_real_escape_string($conexao,$_POST["dataLembreteTarefa"]); 
    $horaLembreteTarefa = mysqli_real_escape_string($conexao,$_POST["horaLembreteTarefa"]); 

    $sql = "UPDATE tbtarefas SET
    tituloTarefa = '{$tituloTarefa}',
    descricaoTarefa = '{$descricaoTarefa}',
    dataConclusaoTarefa = '{$dataConclusaoTarefa}',
    horaConclusaoTarefa = '{$horaConclusaoTarefa}',
    dataLembreteTarefa = '{$dataLembreteTarefa}',
    horaLembreteTarefa = '{$horaLembreteTarefa}'
    WHERE idTarefa = '{$idTarefa}'
    ";
    mysqli_query($conexao,$sql) or die("Erro ao executar a consulta. " . mysqli_error($conexao));

    $rs = mysqli_query($conexao,$sql);

if($rs){
    ?>
    <div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Tarefa cadastrada:</h4>
  <p>O registro foi atualizado com sucesso!</p>
  <hr>
  <div>
    <a class="btn btn-outline-danger mb-2" 
    href="admin.php?menuop=tarefas"><i class="bi bi-list-task"></i> Voltar para tarefas</a>
  </div>
</div>

  <?php
}else{
  ?>
<div class="alert alert-danger" role="alert">
  <h4 class="alert-heading">Erro: Tarefa preenchida indevidamente!</h4>
  <p>A tarefa não pode ser inserida.</p>
  <hr>
  <div>
    <a class="btn btn-outline-danger mb-2" 
    href="admin.php?menuop=tarefas"><i class="bi bi-list-task"></i> Tentar novamente</a>
  </div>
</div>
  <?php
}
?>