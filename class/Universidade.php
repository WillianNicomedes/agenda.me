<?php
require_once('Crud.php');

class Universidade extends Crud{
    protected string $tabela = 'universidade';

    function __construct(
        public string $cnpj,
        private string $nm_fantasia,
        private string $senha,
        public string $nm_rz_social,
        public string $endereco,
        public string $telefone,
        public string $email_universiade,
        public string $token="",
     
    ){}

    public function validar_cadastro_un(){

        //VALIDAÇÃO DO NOME
        if (!preg_match("/^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ'\s]+$/",$this->nm_fantasia)) {
           $this->erro["erro_nome"] = "Por favor informe um nome válido!";
        }
        
        //VERIFICAR SE EMAIL É VÁLIDO
        if(!filter_var($this->email_universiade, FILTER_VALIDATE_EMAIL)){
            $this->erro["erro_email"] = "Formato de e-mail inválido!";
        }

        //VERIFICAR SE SENHA TEM MAIS DE 6 DÍGITOS
        if(strlen($this->senha) < 8){
            $this->erro["erro_senha"] = "Senha deve ter 8 caracteres ou mais!";
        }

    }
    public function insertUniversidade()
    {
        $sql = "SELECT * FROM $this->tabela WHERE ds_email_universiade=?";
        $sql = DB::prepare($sql);
        $sql->execute(array($this->email_universiade));
        $uni = $sql->fetch();
        if(!$uni){
            $sql = "INSERT INTO $this->tabela VALUES(NULL,?,?,?,?,?,?,?,?)";
            $sql = DB::prepare($sql);
            $sql->execute(array($this->cnpj,$this->nm_fantasia,$this->nm_rz_social,$this->endereco,$this->telefone,$this->email_universiade,$this->token,$this->senha));
        }else{
            echo "Universidade já cadastrado";
        }
    }

   
    public function update($id){
      
    }
}

?>