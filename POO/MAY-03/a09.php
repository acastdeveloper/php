<?php
class User {
  private $firstName;
  private $lastName;

  public function __construct ($firstName,$lastName)
  {
    $this -> nom = $firstName;
    $this -> cognom = $lastName;
  }

  public function getNom()
  {
    return $this -> nom;
  }

  public function getCognom()
  {
    return $this -> cognom;
  }

  public function getNomSencer() {

      return $this -> nom." ".$this -> cognom;
  }


}



$usuari = new User("Paco","Garcia");

 echo "Nom: ".$usuari -> getNom();
 echo "<br>";
 echo "Cognom: ".$usuari -> getCognom();
 echo "<br>";
 echo "Nom sencer: ".$usuari -> getNomSencer();
 echo "<br>";

$usuari2 = new User("Ot","Pi");
echo "Nom: ".$usuari2 -> getNom();
echo "<br>";
echo "Cognom: ".$usuari2 -> getCognom();
echo "<br>";
echo "Nom sencer: ".$usuari2 -> getNomSencer();
echo "<br>";





 ?>
