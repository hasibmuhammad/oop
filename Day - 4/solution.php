<?php 

function checkVal($x){
    for($i = 0; $i < 10; $i++){
        if($x == '1' || $x == '4' || $x == '5'){
            $x = 'a';
        }
        else if($x == '2' || $x == '3' || $x == '6'){
            $x = 'b';
        }
    }
    echo "The value of x is {$x}";
}
checkVal(5);
?>