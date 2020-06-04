<?php

//課題1
$name = 'hiroto_nishidate';
if($name == 'hiroto_nishidate'){
    echo 'hiroto_nishidate';
    echo "\n";
}else{
    echo '私はあなたの名前ではありません';
    echo "\n";
}    


//課題2
$total = 0;

for ($i = 0; $i <= 10000; $i++) {
    $total += $i;
}
echo $total;
echo "\n";

//課題3
$fruits = array("Orange","Apple","Strawberry","Grape","Banana");
foreach($fruits as $arrFruits){
    echo $arrFruits;
    echo "\n";
}

//応用課題
$start = 1;
$end = 100;

for($i = $start; $i <= $end; $i++) {
    if($i % 5 == 0) {
        echo $i;
        echo "\n";
    }
}


?>


