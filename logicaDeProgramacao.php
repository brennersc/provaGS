<?php
function funcaoSomaMultiplos($num)
{
    $array = array();
    for ($i = 0; $i < $num; $i++)
    {
        if ($i % 3 == '0' || $i % 5 == '5')
        {
            array_push($array, $i);
        }
    }

    $resultado = array_sum($array);
    print_r($resultado);
    return $resultado;
}
funcaoSomaMultiplos(1000);
?>