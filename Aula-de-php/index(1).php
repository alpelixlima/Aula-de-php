<?php

#questao [1]

$numero = 1;

while ($numero <= 50) {
    echo $numero . "\n";
    $numero++;
} 
    echo " fim da contagem.";


?> 



<?php
#questao [2]

for ($i = 0; $i <= 30; $i++) {
    if($i % 2 == 0) {
        echo "$i - par\n";
    }else {
        echo "$i - impa\n";
    }

}
?> 

<?php
#questao [3]

$numero1 = 5;

for ($g = 1; $g <= 10 ; $g++) {
   $soma = $g * $numero1;

    Echo "5 x $soma \n";
}

?>



<?php
#questão [4]

$valor = 0;
$numero2 = 1; 

while ($numero2 <= 100) {
    $valor += $numero2;
    $numero2 += 1;

    echo "soma total $valor \n";
}

?>


<?php
#questão [5]
$numero3 = 15;

if ($numero3 % 3 == 0 && $numero3 % 5 == 0) {
    echo "\n numero e multiplo de 3 e 5";
}

elseif ($numero3 % 3 == 0) {
    echo "\n numero e multiplo de 3";
}
elseif ($numero3 % 5 == 0) {
    echo "\n numero e multiplo de 5";
} else {
    echo "\n o numero não e multiplo ";
}

?>


<?php
#questão [6]

$a = 15;
$b = 32;
$c = 21;

if ($a >= $b && $b >= $c) {
    echo "o maior numero é: " . $a;
}
elseif ($b >= $a && $b >= $c) {
    echo "o maior numero é:" . $b;
}else {
    echo "o maior numero é:" . $c;
}
?>


<?php
#questao [7]
$r = 20;

for ($r - 1; $r = 0 ; $r--) {
    echo "contagem encerrada!";
}


?>