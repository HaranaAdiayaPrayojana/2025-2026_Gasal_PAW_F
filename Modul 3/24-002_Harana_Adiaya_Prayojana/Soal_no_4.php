<?php
    $height=array(
        "Andy"=>"176",
        "Barry"=>"165",
        "Charlie"=>"170"
    );
    foreach($height as $x=>$x_value){
        echo "Key= ".$x.", Value= ".$x_value;
        echo "<br>";
    };
    echo"<br>Menambahkan data baru";
    $height["Ferdy"]="150";
    $height["Jenny"]="160";
    $height["Kelly"]="145";
    $height["Rudi"]="170";
    $height["Joseph"]="167";

    foreach($height as $x=>$x_value){
        echo "<br>";
        echo "Key= ".$x.", Value= ".$x_value;
    };
    echo"<br>";
    echo"<br>Membuat Array baru ";
    $weight=[
        "Hack"=>"63",
        "Toni"=>"55",
        "Lukas"=>"70"
    ];
    foreach($weight as $n=>$n_value){
        echo "<br>";
        echo "Key= ".$n.", Value= ".$n_value;
    };
?>