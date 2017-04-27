<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ordenar Array</title>
  </head>
  <body>
<p>Tenim una matriu associativa i hem de sumar els seus valors.
</p>
<?php
$a = array('bmw'=>250,'audi'=>125,'seat'=>300);
$b = array_values($a);
$c = array_sum($b);
echo $c;
echo "<br>";
echo array_sum($a);
echo "<br>";


print_r($a);
echo "<br>";



?>

<hr>

<?php
function my_sort($a,$b)
{
if ($a==$b) return 0;
  // return ($a<$b)?-1:1;

    if($a<$b) {
      return -1;
    } else {
      return 1;
    }



}

$arr=array("a"=>4,"b"=>2,"c"=>8, "d"=>6);
uasort($arr,"my_sort");

foreach($arr as $x=>$x_value)
   {
   echo "Key=" . $x . ", Value=" . $x_value;
   echo "<br>";
   }

?>


<hr>


<?php
function tinc_sort($a,$b)
    {
    if ($a==$b) return 0;
      // return ($a<$b)?-1:1;

    if(($a % 2) < !($b % 2))
    {
        return -1;
    } else {
        return 1;
    }
}

$a=array(1,3,7,9,5,9,13,58,11,66,4,2,8,6);
  usort($a,"tinc_sort");

  $arrlength=count($a);

  for($x=0;$x<$arrlength;$x++)
  {
    echo "<span style='font-size:$a[$x]px'>$a[$x]</span>";
  }

?>



  </body>
</html>
