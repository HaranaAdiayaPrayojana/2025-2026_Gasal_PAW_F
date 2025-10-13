<?php
    $fruits=["Avocado","blueberry","Cherry"];
    echo "I like ". $fruits[0].", ".$fruits[1]." and ". $fruits[2].".";

    $fruits[]="Manggo";
    $fruits[]="Banana";
    $fruits[]="Durian";
    $fruits[]="Peach";
    $fruits[]="Melon";

    $ind=count($fruits)-1;
    echo"<br>index tertinggi $ind dengan nilai $fruits[$ind]";

    unset($fruits[4]);
    echo"<br> menghapus satu Data";
    $ind2=count($fruits)-1;
    echo"<br>index tertinggi $ind2 dengan nilai $fruits[$ind2]";

    $veggies=["Bayam","Kol","Toge"];
    echo "<br> $veggies[0], $veggies[1], $veggies[2]";
?>