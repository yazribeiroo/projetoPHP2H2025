<?php  
 
$m_alt = 180;
$me_alt = 150;
$m_f = 160;

$s_f = "F";
$s_m = "M";
 
$i_m = 25;
$i_f = 20;
 
$cont = 0;
 
$soma = $m_alt + $me_alt + $m_f;
$media = round ($soma / 3,2);
 
 
    if ($m_alt > $me_alt){
        echo "$m_alt, $me_alt<br>";
    }
    $cont++;
 
    echo "A altura média das mulheres é: $media<br>";
    echo "O homem mais velho tem $i_m anos e a mulher mais nova tem $i_f anos";


 ?>
 
 