<?php
    echo'Implementasi fungsi array_push()';
    echo"<br>";
    $arr1=["Apel","Jeruk"];
    array_push($arr1,"Asep");
    var_dump($arr1);
    echo"<br>";
    echo"Implementasi fungsi array_merge()";
    $arr2=["Rookie","Master"];
    $arr3=["Bronze","Logia"];
    $merge=array_merge($arr2,$arr3);
    echo"<br>";
    var_dump($merge);
    echo"<br>Implementasi fungsi array_values()";
    $arr4=[
        "a"=>10,
        "b"=>20,
        "c"=>30
    ];
    $val=array_values($arr4);
    echo"<br>";
    var_dump($val);
    echo"<br>Implementasi fungsi array_search()";
    $arr5=[1,24,2,3,5,9];
    $find=array_search(3,$arr5);
    echo"<br> Hasil array_search() = $find";
    echo"<br> Implementasi fungsi array_filter()";
    $arr6=[9,7,2,1,4,6,8,10];
    $gen=array_filter($arr6,fn($n) => $n % 2 == 0);
    echo"<br>";
    var_dump($gen);
    echo"<br> Implementasi berbagai fungsi sorting pada array";
    $arr7=["Avocado","Apple","Banana"];
    $arr8=[
        "Andy"=>25, 
        "Bianca"=>22, 
        "Charlie"=>30
    ];
    sort($arr7);
    echo"<br>";
    var_dump($arr7);
    rsort($arr7);
    echo"<br>";
    var_dump($arr7);
    asort($arr8);
    echo"<br>";
    var_dump($arr8);
    ksort($arr8);
    echo"<br>";
    var_dump($arr8);
    arsort($arr8);
    echo"<br>";
    var_dump($arr8);
    krsort($arr8);
    echo"<br>";
    var_dump($arr8);
?>