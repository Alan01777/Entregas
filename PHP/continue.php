<?php
$vetor = array(1,3,5,7,8,11,12,15,20);
for($i=0;$i<sizeof($vetor);$i++){
    //Impar
    if($vetor[$i]%2!=0){
        continue;
    }
    echo "O número", $vetor[$i], "é par. <br>";
}
/*Output:
O número8é par.
O número12é par.
O número20é par.*/