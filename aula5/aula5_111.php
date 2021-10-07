<?php
echo '$i $j<br>';
for ($i=0; $i<3; $i++) {//ponteiro do minuto
  for ($j=1; $j<2; $j++) {//ponteiro do segundo
    echo "$i $j<br>";
  }
}

/*
$i  $j
0   1
1   1
2   1

*/
/*
$i  $j
1   0
1   1
1   2

*/
/*
$i  $j
0   0
0   1
0   2
0   3
0   4
1   0
1   1
1   2
1   3
1   4
2   0
2   1
2   2
2   3   
2   4
3   0
3   1
3   2
3   3
3   4

*/
?>