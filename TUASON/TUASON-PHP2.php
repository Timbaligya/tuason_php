<?php
    function geoSeq($a, $r, $n){
        for ($i = 0; $i < $n; $i++){
            $curr_term = $a * pow($r, $i);
            echo $curr_term, " ";
        }
    }
    echo "The number of terms in the geometric progression: "
    $n = (int) fgets(STDIN);

    if($n <= 0 ){
        echo "Please enter a positive integer";
        exit;
    }

    $a = 1;
    $r = 2;

    geoSeq($a, $r, $n);
?>