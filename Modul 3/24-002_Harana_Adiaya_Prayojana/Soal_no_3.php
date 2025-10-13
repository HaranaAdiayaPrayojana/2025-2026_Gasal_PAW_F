<?php
    $height=array(
        "Andy"=>"176",
        "Barry"=>"165",
        "Charlie"=>"170"
    );
    echo "Andi is ".$height["Andy"]."cm tall.";
    $height["Rusdi"]="160";
    $height["Fuad"]="180";
    $height["Jamal"]="170";
    $height["Udin"]="165";
    $height["Evan"]="162";
    $last=array_key_last($height);
    echo"<br> Nilai indek terakhir $height[$last] dengan keys $last";
    echo"<br> Menghapus 1 data";
    unset($height["Evan"]);
    $lastK=array_key_last($height);
    echo"<br> Nilai indek terakhir $height[$lastK] dengan keys $lastK. Setelah menghapus data";
    $weight=[
        "Jack"=>"40",
        "Hound"=>"60",
        "Albert"=>"50"
    ];
    echo"<br>Array Baru:";
    print_r($weight);
    $DaKeys=array_keys($weight);
    echo "<br>Menampilkan data ke 2 = ".$weight[$DaKeys[1]];
?>