<?php
include('./sis-agendame/db/conexao.php');
   
class Usuario{
    
    protected string $tabela = 'tbcontatos';
    

    function __construct(
        public string $nome,
        private string $email,
        private string $senha,
        public string $telefone,
        public string $genero,
        public string $cpf,
        public string $rg,
        public string $dt_nasc,
        public string $endereco,
        public $conexao=[],
        public string $token="",
        public float $flag=0,
        public array $erro=[]
      
    ){}

    public function validar_cadastro(){

        //VALIDAÇÃO DO NOME
        if (!preg_match("/^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ'\s]+$/",$this->nome)) {
           $this->erro["erro_nome"] = "Por favor informe um nome válido!";
        }

        //VERIFICAR SE EMAIL É VÁLIDO
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
            $this->erro["erro_email"] = "Formato de e-mail inválido!";
        }

        //VERIFICAR SE SENHA TEM MAIS DE 6 DÍGITOS
        if(strlen($this->senha) > 11){
            $this->erro["erro_senha"] = "Senha deve ter 6 caracteres ou mais!";
            echo "<script language=\"javascript\">
            alert(\"Foi salvo com sucesso!\");
            </script>";
        }

    }

    public function insertPaciente(){
        //VERIFICAR SE ESTE EMAIL JÁ ESTÁ CADASTRADO NO BANCO
        $sql = "SELECT * FROM tbcontatos WHERE emailContato=? LIMIT 1";
        $sql = $this->conexao->prepare($sql);
        $sql->execute(array($this->email));
        $usuario = $sql->fetch();
        //SE NÃO EXISTIR O USUARIO - ADICIONAR NO BANCO
        if (!$usuario)
        {
            $sql = "INSERT INTO $this->tabela VALUES (null,?,?,?,?,?,?,?,null,?,?,?,?)";
            $sql = $this->conexao->prepare($sql);
           /*/ok/*/ $paciente = $sql->execute(array($this->nome,$this->email,$this->telefone,$this->endereco,$this->genero,$this->dt_nasc,'0',$this->rg,$this->cpf,$this->senha,$this->token));
        }else{
            $this->erro["erro_geral"] = "Usuário já cadastrado!";
        }
    }

     public function update($id){
        $sql = "UPDATE $this->tabela SET cd_token=? WHERE id_paciente=?";
        $sql = DB::prepare($sql);
        return $sql->execute(array($token,$id));
    }

}