<?php
$vetor = array (1,2,3,4,5);
foreach($vetor as $v){
    print "O valor atual do vetor  é $v. <br>";
}
$a = array("um"=>1, "dois"=>2, "tres"=>3);
foreach($a as $chave => $valor){
    print("\$a[$chave] => $valor. <br>");
}
/*Output:
O valor atual do vetor é 1.
O valor atual do vetor é 2.
O valor atual do vetor é 3.
O valor atual do vetor é 4.
O valor atual do vetor é 5.
$a[um] => 1.
$a[dois] => 2.
$a[tres] => 3.*/