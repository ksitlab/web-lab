<?php
header("Content-Type: text/plain");
$allStates="Mississippi Alabama Texas Massachusetts Kansas tuxas";
$states=[];
$state1=explode(' ',$allStates);
$i=0;
foreach($state1 as $s){
    if(preg_match('/xas$/',$s)){
        echo "The state ends in xas ".$s."\n";
        $states[$i]=$s;
        $i=$i+1;
    }
}
foreach($state1 as $s){
    if(preg_match('/^k.*s$/i',$s)){
        echo "The state begins with k and ends with s ".$s."\n";
        $states[$i]=$s;
        $i=$i+1;
    }
}
foreach($state1 as $s){
    if(preg_match('/^M.*s$/i',$s)){
        echo "The state begins with M and ends with s ".$s."\n";
        $states[$i]=$s;
        $i=$i+1;
    }
}
foreach($state1 as $s){
    if(preg_match('/a$/',$s)){
        echo "The state ends with a ".$s."\n";
        $states[$i]=$s;
        $i=$i+1;
    }
}
foreach($states as $s=>$v){
    echo "$s contains $v \n";
}
?>
