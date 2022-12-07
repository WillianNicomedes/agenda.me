<?php
require_once('Crud.php');

 class Estatiticas extends Crud{ 

    public static function quantidade_pacientes_cadastrados(){
       $sql = "SELECT count(id_paciente) as paci from paciente;";
       $sql = DB::prepare($sql);
       $sql->execute(); 
       $countPa = $sql->fetch(PDO::FETCH_ASSOC);
       return print_r($countPa['paci']);
    }

    public static function quantidade_estagiarios_cadastrados(){
      $sql = "SELECT count(id_estagiario) as esta from estagiario;";
      $sql = DB::prepare($sql);
      $sql->execute(); 
      $countPa = $sql->fetch(PDO::FETCH_ASSOC);
      return print_r($countPa['esta']);
   }

   public static function dia_semana()
   {
      $diasemana = array('Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sabado', 'Sexta');
      $data = date('Y-m-d');
      $diasemana_numero = date('w', strtotime($data));
      
      $sql = "SELECT curdate() as ano_mes";
      $sql = DB::prepare($sql);
      $sql->execute(); 
      $date = $sql->fetch(PDO::FETCH_ASSOC);
      return print_r($diasemana[$diasemana_numero].",".$date['ano_mes']);
   }

   public static function sessaoPacientes()
   {
    
        $sql = "SELECT count(cd_token) AS tokensUp FROM paciente WHERE cd_token NOT LIKE ''";
        $sql = DB::prepare($sql);
        $sql->execute(); 
        $tokensAtualizados = $sql->fetch(PDO::FETCH_ASSOC);
        $sql = "SELECT count(cd_token) AS count_login_paciente FROM paciente";
        $sql = DB::prepare($sql);
        $sql->execute(); 
        $AlltokensPa= $sql->fetch(PDO::FETCH_ASSOC);
        $result = $tokensAtualizados['tokensUp'] * 100;
        $result2 = $result/$AlltokensPa['count_login_paciente'];
        return print_r(number_format($result2, 0)."%");
   }

   public static function sessaoEstagiarios()
   {
      $sql = "SELECT count(cd_token) AS tokensUpEs FROM estagiario WHERE cd_token NOT LIKE ''";
      $sql = DB::prepare($sql);
      $sql->execute(); 
      $tokensAtualizados = $sql->fetch(PDO::FETCH_ASSOC);
      $sql = "SELECT count(cd_token) AS count_login_estagiario FROM estagiario";
      $sql = DB::prepare($sql);
      $sql->execute(); 
      $AlltokensEs= $sql->fetch(PDO::FETCH_ASSOC);
      $result = $tokensAtualizados['tokensUpEs'] * 100;
      $result2 = $result/$AlltokensEs['count_login_estagiario'];
      return print_r(number_format($result2, 0)."%");

   }

    public function update($id){

    }
}
?>
