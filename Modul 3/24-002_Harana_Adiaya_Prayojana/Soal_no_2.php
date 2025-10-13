<?php
    $fruits=array("Avocado","Blueberry","Cherry");
    $arrlength=count($fruits);
    for($x=0;$x < $arrlength;$x++){
        echo $fruits[$x];
        echo "<br>";
    }
    
    for ($i = 0; $i < 5; $i++) {
        $fruits[] = "Entitas " . ($i + 1);
        $arrlength = count($fruits)-1;
        echo"<br> menambah data $fruits[$arrlength]";
        echo "<br>Panjang array saat ini ".$arrlength+1;
    }

    $veggies=["Bayam","Kol","Toge"];
    $pveggies=count($veggies);
    for($y=0;$y<$pveggies;$y++){
        echo "<br>$veggies[$y]";
    }
?>