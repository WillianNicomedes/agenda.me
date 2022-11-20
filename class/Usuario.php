<?php
require_once('Crud.php');

class Usuario extends Crud{
    protected string $tabela = 'paciente';
    

    function __construct(
        public string $nome,
        private string $email,
        private string $senha,
        public string $telefone,
        public string $genero,
        public string $cpf,
        public string $rg,
        public string $dt_nasc,
        public string $token="",
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
        if(strlen($this->senha) < 6){
            $this->erro["erro_senha"] = "Senha deve ter 6 caracteres ou mais!";
        }

    }

    public function insertPaciente(){
        //VERIFICAR SE ESTE EMAIL JÁ ESTÁ CADASTRADO NO BANCO
        $sql = "SELECT * FROM contato WHERE ds_email_paciente=? LIMIT 1";
        $sql = DB::prepare($sql);
        $sql->execute(array($this->email));
        $usuario = $sql->fetch();
        //SE NÃO EXISTIR O USUARIO - ADICIONAR NO BANCO
        if (!$usuario)
        {
            $sql = "INSERT INTO $this->tabela VALUES (null,?,?,?,?,?,?,?)";
            $sql = DB::prepare($sql);
           /*/ok/*/ $paciente = $sql->execute(array($this->nome,$this->cpf,$this->dt_nasc,$this->rg,$this->genero,$this->senha,$this->token));
        
            if($paciente)
            {
                //PROCURANDO O ID DO PACIENTE
                $sql = "SELECT id_paciente FROM $this->tabela as pa
                        WHERE nm_paciente = ? AND cd_cpf_paciente=? AND cd_rg_paciente=? AND cd_senha=?";
                $sql = DB::prepare($sql);
                $sql->execute(array($this->nome,$this->cpf,$this->rg,$this->senha));
                $idPaciente = $sql->fetch();
                
               // return print_r($idPaciente);//
                if($idPaciente)
                {
                    $sql = "INSERT INTO contato VALUES (null,?,?,?)";
                    $sql = DB::prepare($sql);
                    return $sql->execute(array($this->telefone,$this->email, $idPaciente->{'id_paciente'}));
                }else{
                    $this->erro["erro_geral"] = "";
                }
            }else{
                $this->erro["erro_geral"] = "Usuário já cadastrado!";

            }
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