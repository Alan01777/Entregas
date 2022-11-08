<?php
$k = 0;
$i = 0;
while($k<10){
    $i++;
    $k++;
    while($i<20){
        if($i==10){
            echo "Encerrando o primeiro while <br>";
            break;
            echo "Essa linha nunca vai ser impressa";
        }
        elseif($i==15){
            echo "encerrando os 2 whiles...";
            break 2;
        }
        $i++;
    }
}
/*Output:
Encerrando o primeiro while
encerrando os 2 whiles...*/