<?php

$num = $_GET['numero1'];

echo "Escreva ".$num." nomes para o cadastro<br/><br/>";
while ($num > 0 ) {
    $numero = 0;
    $numero++;
    echo "Nome".$numero."<input type="text" none="nomes"><br/><br/>";
    $num--;
        
}

for($quan = 1; $quan > 0; $quan = $quan - 1){
    echo "Nome<input type="text" none="nomes"><br/><br/>";
}
?>
