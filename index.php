<?php 

function Insertion_Sort($arr)
{
$i=1;
while($i<count($arr))
{
$key=$arr[$i];
$f=0;
 for($j=$i-1; $j>=0; $j--)
 {
   if($arr[$j]>$key)
   { 
    $arr[$j+1]=$arr[$j];
   }
   else{
         $f=1;
         $arr[$j+1]=$key;
         break;
       }
 }
 if($f==0)
 {
 $arr[0]=$key;
 }
$i++;
}
return $arr;
}
echo "<pre>";
print_r(Insertion_Sort([12, 11, 13, 5, 6]));
echo "<pre>";
print_r(Insertion_Sort([14, 33, 27, 10, 35,19,42,44]));

	
?>
