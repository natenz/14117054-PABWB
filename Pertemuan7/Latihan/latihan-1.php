<?php 
    function swicth(&$a, &$b){
        $temp = $a;
        $a = $b;
        $b = $temp;
    }

    $a = 4;
    $b = 9;

    echo "Nilai sebelum ditukar <br> ";
    echo "Nilai a : " . $a;
    echo "<br> Nilai b : " . $b;
    echo "<br>";
    swicth ($a, $b);



    echo "<br>";
    echo "Nilai setelah ditukar <br> ";
    echo "Nilai a : " . $a;
    echo "<br>NIlai b : " . $b;


    ?>