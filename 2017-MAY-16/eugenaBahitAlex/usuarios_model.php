<?php

require_once('db_abstract_model.php');
//Porta aquí tot la classe abstracta

class Usuario extends DBAbstractModel {
  public $nombre;
  public $apellido;
  public $email;
  private $clave;
  protected $id;
  function __construct() {
      $this->db_name = 'testingmultiverse_abm';
  }


  public function get($user_email='') {
      //És un paràmetre per defecte que consisteix en propietat igual a valor buit

      if($user_email != ''):
        $this->query = "
        SELECT id, nombre, apellido, email, clave
        FROM usuarios
        WHERE email = '$user_email'
        ";
        $this->get_results_from_query();
      endif;
      if(count($this->rows) == 1):
        foreach ($this->rows[0] as $propiedad=>$valor):
        $this->$propiedad = $valor;
        //OBSERVACIÓ: fixar-se que posa $this->$propiedad però no $this->propiedad. Per què?
        // Perquè $propiedad és una variable que en funció de si és el nombre, el apellido, email, etc... substituirà $propiedad per cadascúna de les propietats. És com una mena de variable mestra pensada per ser substituida

        endforeach;
      endif;
  }


  




 ?>
