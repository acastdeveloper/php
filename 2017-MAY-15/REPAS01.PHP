<?php
/**
 *
 */
class Client
{

static public $nombre_completo ='Cliente desconocido';

}


print Client::$nombre_completo;

// $cliente =new Client();
// echo $cliente->nombre_completo;
//Dona un avís per dir que no és del tot correcte.

echo '<hr>';

/**
 *
 */
// class Client2
// {
//   static public $nombre_completo = 'Cliente desconocido';
//
//   function __construct()
//   {
//     self::$nombre_completo ='Juan Pérez';
//   }
//
// }
//
// $cliente2 = new Client2();
// echo Client2::$nombre_completo;
// echo $cliente2::$nombre_completo;


class Cliente3 {
static public $nombre_completo = 'Cliente desconocido';
protected $id = 1001;
}
print Cliente3::$nombre_completo;
//print Cliente3::$id;// dona error perquè no és estàtica i perquè no s'ha instanciat






 ?>
