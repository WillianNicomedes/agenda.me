<?php
require_once('DB.php');

class Login{
    function __construct(
        public $conexao=[]
    ){}
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
            case "tbcontatos":
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
        $sql = "SELECT emailContato, senhaContato FROM $this->tabela AS con
                WHERE emailContato =? AND senhaContato=? LIMIT 1";
        $sql = $this->conexao->prepare($sql);
        $sql->execute(array($this->email, $this->senha));
        $usuario = $sql->fetch(PDO::FETCH_ASSOC);
        if($usuario)
        {
            Login::token();

            $sql = "UPDATE $this->tabela 
                    SET cd_token = ?
                    WHERE  emailContato = ? and  senhaContato = ?";
            $sql = $this->conexao->prepare($sql);
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
      
     
            switch ($this->tabela){
                case "tbcontato":
                    $sql = "SELECT * FROM tbcontato WHERE cd_token=?";
                    $sql = $this->conexao->prepare($sql);
                    $sql->execute(array($token));
                    $usuario=$sql->fetch(PDO::FETCH_ASSOC);
                        $this->email = $usuario["emailContato"];
                        $this->nome = $usuario["nomeContato"];
                    break;
                case "universidade":
                    $sql = "SELECT * FROM $this->tabela WHERE cd_token=? LIMIT 1";
                    $sql = DB::prepare($sql);
                    $sql->execute(array($token));
                    $usuario = $sql->fetch(PDO::FETCH_ASSOC);
                        $this->email = $usuario["cd_senha_universiade"];
                        $this->nome = $usuario["ds_email_universiade"];
                        $_SESSION['id_universidade'] = $usuario["id_universidade"];
                        
                    break;
                case "estagiario":
                    $sql = "SELECT * FROM $this->tabela WHERE cd_token=? LIMIT 1";
                    $sql = DB::prepare($sql);
                    $sql->execute(array($token));
                    $usuario = $sql->fetch(PDO::FETCH_ASSOC);
                    $this->email = $usuario["nm_email_aluno"];
                    $this->nome = $usuario["nm_aluno"];
                    break;
            }
     
    }
}

?>