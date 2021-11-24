<?php
function recursiva($a){
   if ($a <= 10) {
       echo $a." ";
       recursiva($a+1);
   }
}
recursiva(5);
?>
