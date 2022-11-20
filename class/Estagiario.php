<?php
require_once('Crud.php');

class Estagiario extends Crud{
    protected string $tabela = 'estagiario';

    function __construct(
        public string $ra,
        public string $email_estagiario,
        public string $cpf_estagiario,
        public string $nome_estagiario,
        public string $nascimento,
        public string $periodo,
        private string $senha,
        private string $id_universidade,
        public string $token="",
     
    ){}
    public function insertEstagiario()
    {
        $sql = "SELECT * FROM $this->tabela WHERE nm_email_aluno = ?";
        $sql = DB::prepare($sql);
        $sql->execute(array($this->email_estagiario));
        $estagiario = $sql->fetch(PDO::FETCH_ASSOC);
        if(!$estagiario)
        {
            $sql = "INSERT INTO $this->tabela VALUES(NULL,?,?,?,?,?,?,?,?,?)";
            $sql = DB::prepare($sql);
            $sql->execute(array($this->ra,$this->email_estagiario,$this->cpf_estagiario,$this->nome_estagiario,$this->nascimento,$this->periodo,$this->senha,$this->id_universidade,$this->token));
        }else{
            echo "Estagiario já cadastrado";
        }
    }

    public function update($id){
      
    }
}