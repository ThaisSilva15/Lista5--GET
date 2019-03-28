<?php  

$prontuario= array(
        0=> 1831224,
        1=> 1831348,
        2=> 1831364,
        3=> 1831275
    );

for($i=0;$i<count($prontuario);$i++){

    echo "<a href= mostrarNome.php?id=$i>$prontuario[$i]</a><br>";
        
}
