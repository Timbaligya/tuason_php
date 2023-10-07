<?php
    $name = "Timothy Tuason";
    echo $name;

    function vowelCount($name){
        countVowel('[aeiou]/i',$name, $vowelCounter);
        return $vowelCounter;
    }

    echo " There are " , $vowelCounter ,  " vowels in my name.";
?>