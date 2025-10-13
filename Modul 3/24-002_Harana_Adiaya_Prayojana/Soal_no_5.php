<?php
    $student=array(
        array("Alex","22040","0812345678"),
        array("Bianca","220402","0812345687"),
        array("Candice","220403","0812345665")
    );
    for($row=0;$row<3;$row++){
        echo"<p><b>Row number $row</b></p>";
        echo"<ul>";
        for($col=0;$col<3;$col++){
            echo"<li>".$student[$row][$col]."</li>";
        };
        echo"</ul>";
    };
    $student[]=array("Ali","22041","0812345722");
    $student[]=array("Parjo","22044","0812346721");
    $student[]=array("Lusy","22045","0819045675");
    $student[]=array("Ramlan","22046","0812389573");
    $student[]=array("Ohim","22047","0812310976");
?>
<table border="1" cellpadding="6">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>NIM</th>
    </tr>
    <?php for($r=0;$r<count($student);$r++):?>
    <tr>
        <?php for ($c=0;$c<3;$c++):?>
            <td><?php echo $student[$r][$c];?></td>
        <?php endfor;?>
    </tr>
    <?php endfor;?>
</table>