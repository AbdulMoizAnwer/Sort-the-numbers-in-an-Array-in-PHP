<?php

//Write a PHP program to sort the numbers in an array.

$num = array(1,2,34,43,0);
echo "Before Sorting: ";
for($o=0;$o<sizeof($num);$o++){
    echo $num[$o] . " ";
}

echo "<br>";

for($i=0;$i<sizeof($num);$i++){
    for($j=$i+1;$j<sizeof($num);$j++){
        if($num[$i]>$num[$j]){
            $num[$i] = $num[$i] + $num[$j];
            $num[$j] = $num[$i] - $num[$j];
            $num[$i] = $num[$i] - $num[$j];
        }
    }
}
echo "After Sorting: ";
for($k=0;$k<sizeof($num);$k++){
    echo $num[$k] . " ";
}

?>
