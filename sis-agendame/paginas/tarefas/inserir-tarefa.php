<?php
$tituloTarefa = strip_tags( mysqli_real_escape_string($conexao,$_POST['tituloTarefa']));
$descricaoTarefa = strip_tags( mysqli_real_escape_string($conexao,$_POST['descricaoTarefa']));
$dataConclusaoTarefa = strip_tags( mysqli_real_escape_string($conexao,$_POST['dataConclusaoTarefa']));
$horaConclusaoTarefa = strip_tags( mysqli_real_escape_string($conexao,$_POST['horaConclusaoTarefa']));
$dataLembreteTarefa = strip_tags( mysqli_real_escape_string($conexao,$_POST['dataLembreteTarefa']));
$horaLembreteTarefa = strip_tags( mysqli_real_escape_string($conexao,$_POST['horaLembreteTarefa']));
$recorrenciaTarefa = strip_tags( mysqli_real_escape_string($conexao,$_POST['recorrenciaTarefa']));

$sql = "INSERT INTO tbtarefas 
(
    tituloTarefa,
    descricaoTarefa,
    dataConclusaoTarefa,
    horaConclusaoTarefa,
    dataLembreteTarefa,
    horaLembreteTarefa,
    recorrenciaTarefa
)
VALUES
(
    '{$tituloTarefa}',
    '{$descricaoTarefa}',
    '{$dataConclusaoTarefa}',
    '{$horaConclusaoTarefa}',
    '{$dataLembreteTarefa}',
    '{$horaLembreteTarefa}',
    '{$recorrenciaTarefa}'
)
";

$rs = mysqli_query($conexao,$sql);

if($rs){
    ?>
<div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Tarefa cadastrada:</h4>
  <p>Tarefa inserida com sucesso!</p>
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
  <p>A tarefa não pode ser inserida!</p>
  <hr>
  <div>
    <a class="btn btn-outline-danger mb-2" 
    href="admin.php?menuop=tarefas"><i class="bi bi-list-task"></i> Tentar novamente</a>
  </div>
</div>
    <?php
}
?>