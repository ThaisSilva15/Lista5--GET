<?php
$v1= array(
     $_GET["v1"],
     $_GET["v2"],       
     $_GET["v3"],
     $_GET["v4"],
     $_GET["v5"],
);

$maior=0;

for($i=0; $i<count($v1);$i++){
    if($v1[$i]>$maior){
       $maior=$v1[$i];
}
}
echo $maior ."<br>";

for($i=0; $i<count($v1);$i++){
    if($v1[$i]%2==0){
     echo $v1[$i] ." È par<br>";
}
}

for($i=0; $i<count($v1);$i++){
    if(($v1[$i]%3==0)&&($v1[$i]%5==0)){
     echo $v1[$i];
}else{
    echo $v1[$i] ." Não e múltiplo de 3 e 5. "."<br>";
}
}

?>
