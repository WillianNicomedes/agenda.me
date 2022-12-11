<?php
$idTarefa = mysqli_real_escape_string($conexao, $_GET['idTarefa']);
$sql = "DELETE FROM tbtarefas WHERE idTarefa = '{$idTarefa}'";
mysqli_query($conexao, $sql) 
or die("Erro ao excluir o registro. Erro:" . mysqli_error($conexao) );

?>
<div class="alert alert-danger" role="alert">
  <h4 class="alert-heading">Tarefa Excluída:</h4>
  <p>Registro excluído com sucesso!</p>
  <hr>
  <div>
    <a class="btn btn-outline-danger mb-2" 
    href="admin.php?menuop=tarefas"><i class="bi bi-list-task"></i> Voltar para tarefas</a>
  </div>
</div>
  <?php
?>