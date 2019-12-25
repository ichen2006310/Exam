<?php

$str = 15 ;
$ar=array();
for($i=1;$i<=$str;$i++){
    if($i%3==0&&$i%5==0){
        array_push($ar, $i);
    }
    elseif($i%3!=0&&$i%5!=0) {
        array_push($ar, $i);
    }
}


print_r($ar);
print count($ar);