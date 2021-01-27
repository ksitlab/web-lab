<?php
header('Content-Type: text/plain');
$matrix1=array(array(1,2),
array(3,4));
$matrix2=array(array(5,6),
array(7,8));
$rowCount=count($matrix1);
$colCount=count($matrix1[0]);
$rowCount2=count($matrix2);
$colCount2=count($matrix2[0]);
echo "\n\n";
echo "The order of matrix A is: ".$rowCount."x".$colCount;
echo "\n";
echo "The order of matrix B is: ";
echo $rowCount2."x".$colCount2;
echo "\n\n";
echo "Matrix A: \n";
for($i=0;$i<$rowCount;$i++){
    for($j=0;$j<$colCount;$j++){
    echo $matrix1[$i][$j]." ";
    }
    echo "\n";
}
echo "\n\n";
echo "Matrix B: \n";
for($i=0;$i<$rowCount2;$i++){
    for($j=0;$j<$colCount2;$j++){
    echo $matrix2[$i][$j]." ";
    }
    echo "\n";
}
echo "\n\n";
echo "Transpose of matric A: \n";
for($i=0;$i<$colCount;$i++){
    for($j=0;$j<$rowCount;$j++){
    echo $matrix1[$j][$i]." ";
    }
    echo "\n";
}
echo "\n\n Sum of matrices: \n";
for($i=0;$i<$rowCount;$i++){
    for($j=0;$j<$colCount;$j++){
        $val=$matrix1[$i][$j]+$matrix2[$i][$j];
        echo $val." ";
    }
    echo "\n";
}

echo "\n\n Product of matrices: \n";
if($colCount==$rowCount2){
for($i=0;$i<$rowCount;$i++){
    for($j=0;$j<$colCount;$j++){
        $val=$matrix1[$i][$j]*$matrix2[$i][$j];
        echo $val." ";
    }
    echo "\n";
}
}