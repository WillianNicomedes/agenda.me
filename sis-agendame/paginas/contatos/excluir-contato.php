<?php
$idContato = mysqli_real_escape_string($conexao, $_GET['idContato']);
$sql = "DELETE FROM tbcontatos WHERE idContato = '{$idContato}'";
mysqli_query($conexao, $sql) 
or die("Erro ao excluir o registro. Erro:" . mysqli_error($conexao) );

?>
<div class="alert alert-danger" role="alert">
  <h4 class="alert-heading">Contato Exluído:</h4>
  <p>Registro excluído com sucesso!</p>
  <hr>
  <div>
    <a class="btn btn-outline-danger mb-2" 
    href="admin.php?menuop=contatos"><i class="bi bi-list-task"></i> Voltar para contatos</a>
  </div>
</div>
  <?php
?>