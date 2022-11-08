<?php
$vetor = array(1,2,3,4,5,6,7,8,9,10);
$k = 0;
while($k<10){
    if($vetor[$k]=="sair"){
        break;
    }
    echo "$vetor[$k].<br> ";

    $k++;
}
/*Output:
1.
2.
3.
4.
5.
6.
7.
8.
9.
10.*/