<!DOCTYPE html>
<html>
<body>

<?php
function my_sort($a,$b)
{
	if ($a==$b) return 0;
	//return ($a<$b)?-1:1;
	if($a<$b){
		return -1;
	}
	else{
		return 1;
	}
  
}

$arr=array("a"=>4,"b"=>2,"c"=>8,"d"=>6);
uksort($arr,"my_sort");
 
foreach($arr as $x=>$x_value)
   {
   echo "Key=" . $x . ", Value=" . $x_value;
   echo "<br>";
   }

?>

</body>
</html>