<?php
require_once('DB.php');

class Login{
    protected string $tabela;
    public string $email;
    public string $nome;
    public string $token;
    private string $senha;
    public array $erro=[];
    
    public function pegarEmailEsenha($email,$senha,$opcao)
    {
       $this->email = $email;
       $this->senha = $senha;
       $_SESSION['opcao'] = $opcao;
       $this->tabela=$opcao;
       Login::optionLogin();
    }

    public function token()
    {
        $this->token = sha1(uniqid().date('d-m=Y-H-i-s'));
    }
    
    public function optionLogin()
    {
        switch ($this->tabela) {
            case "paciente":
                Login::LoginPaciente();
                break;
            case "universidade":
                Login::LoginUniversidade();
                break;
            case "estagiario":
                Login::loginEstagiario();
                break;
        }
    }
    public function loginEstagiario()
    {
        //verificar se tem esse estagiario cadastrado//
        $sql = "SELECT nm_email_aluno,cd_senha_aluno FROM $this->tabela AS es
                WHERE nm_email_aluno =? AND cd_senha_aluno=? LIMIT 1";
        $sql = DB::prepare($sql);
        $sql->execute(array($this->email, $this->senha));
        $estagiario = $sql->fetch(PDO::FETCH_ASSOC);
        if($estagiario){

            Login::token();
            
            $sql = "UPDATE $this->tabela as es
                    SET cd_token = ?
                    WHERE nm_email_aluno =? AND cd_senha_aluno=?";
            $sql = DB::prepare($sql);
            if($sql->execute(array($this->token,$this->email,$this->senha)))
            {
                $_SESSION['cd_token'] = $this->token;
                
                header('location: estagiario/estagiario.php');//joga pro perfil do estagiario//
            }
        }else{
            $this->erro["erro_geral"]= "Usuário ou senha incorretos!";
        }
    }

    public function LoginPaciente()
    {
        //verificar se tem esse usuario cadastrado//
        $sql = "SELECT ds_email_paciente, cd_senha FROM $this->tabela AS pa
                INNER JOIN contato AS con ON(pa.id_paciente = con.id_paciente)
                WHERE ds_email_paciente =? AND cd_senha=? LIMIT 1";
        $sql = DB::prepare($sql);
        $sql->execute(array($this->email, $this->senha));
        $usuario = $sql->fetch(PDO::FETCH_ASSOC);
        if($usuario)
        {
            Login::token();

            $sql = "UPDATE $this->tabela as pa
                    INNER JOIN contato as con on(pa.id_paciente = con.id_paciente)
                    SET cd_token = ?
                    WHERE  ds_email_paciente = ? and  cd_senha = ?";
            $sql = DB::prepare($sql);
            if($sql->execute(array($this->token,$this->email,$this->senha)))
            {
                $_SESSION['cd_token'] = $this->token;
                
                header('location: paciente/paciente.php');//joga pro perfil do paciente//
            }
        }else{
           $this->erro["erro_geral"]= "Usuário ou senha incorretos!";
        }
    }

    public function LoginUniversidade()
    {
        //verificar se tem essa Universidade cadastrada//
        $sql = "SELECT ds_email_universiade,cd_senha_universiade FROM $this->tabela AS un
                WHERE ds_email_universiade=? AND cd_senha_universiade=? limit 1";
        $sql = DB::prepare($sql);
        $sql->execute(array($this->email,$this->senha));
        $universidade = $sql->fetch(PDO::FETCH_ASSOC);
        if($universidade)
        {
            Login::token();
            $sql = "UPDATE $this->tabela AS uni
                    SET cd_token = ?
                    WHERE ds_email_universiade=? AND cd_senha_universiade=?";
            $sql = DB::prepare($sql);
            if($sql->execute(array($this->token,$this->email,$this->senha)))
            {
                 $_SESSION['cd_token'] = $this->token;

                 header('location: universidade/universidade.php');//joga pro perfil da universidade//
            }
        }else{
            $this->erro["erro_geral"]= "Usuário ou senha incorretos!";
         }
    }

    public function VerificarToken($token,$tabela)
    {
       $this->tabela=$tabela;
       $sql = "SELECT * FROM $this->tabela WHERE cd_token=? LIMIT 1";
       $sql = DB::prepare($sql);
       $sql->execute(array($token));
       $usuario = $sql->fetch(PDO::FETCH_ASSOC);
       if($usuario)
       {
            switch ($this->tabela){
                case "paciente":
                    $sql = "SELECT * FROM InfoPaciente WHERE cd_token=?";
                    $sql = DB::prepare($sql);
                    $sql->execute(array($token));
                    $usuario=$sql->fetch(PDO::FETCH_ASSOC);
                        $this->email = $usuario["ds_email_paciente"];
                        $this->nome = $usuario["nm_paciente"];
                    break;
                case "universidade":
                        $this->email = $usuario["cd_senha_universiade"];
                        $this->nome = $usuario["ds_email_universiade"];
                        $_SESSION['id_universidade'] = $usuario["id_universidade"];
                        
                    break;
                case "estagiario":
                    $this->email = $usuario["nm_email_aluno"];
                    $this->nome = $usuario["nm_aluno"];
                    break;
            }
       }else{
        header('location: index.php');
       }
    }
}

?>