<?php


$str = "junyiacademy";
$result = strrev($str);
print $result."<br>";


$str2 = "flipped class room is important";
$result2 = explode(" ",$str2);
//print_r($result2) ;
$i=count($result2);
for($j=0 ; $j<$i ; $j++){
    $rs = strrev($result2[$j])." ";
    print $rs;
}