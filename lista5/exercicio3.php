<?php


$v1= array();
    $op=$_GET ["operacao"];
$v1 [0]= $_GET ["n1"];
$v1 [1]= $_GET ["n2"];
$v1 [2]= $_GET ["n3"];
$v1 [3]= $_GET ["n4"];
  
switch ($op){
    case 'soma':
        $soma=0;
    for($i=0;$i<count($v1);$i++) {
        $soma+=$v1[$i];
    }
    echo $soma;
     break;
}
switch ($op){
    case 'divisao':
     echo $v1[0]/$v1[1];
     break;
}
switch ($op){
    case 'multiplicacao':
        $mult=1;
    for($i=0;$i<count($v1);$i++) {
        $mult*=$v1[$i];
    }
    echo $mult;
     break;    
}
switch ($op){
    case 'subtracao':
     echo $v1[0]-$v1[1];
     break;
}



