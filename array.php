<?php
$arraySigla = ['ES', 'MG', 'RJ', 'SP'];
$arrayEstado = ['São Paulo', 'Rio de Janeiro', 'Minas Gerais', 'Espírito Santo'];
$array = [];

foreach ($arraySigla as $key => $value)
{
    foreach ($arrayEstado as $key => $value2)
    {
        if (substr($value, 0, 1) === substr($value2, 0, 1))
        {
            $array += [$value => $value2];
        }
    }
}

foreach ($array as $key => $value)
{
    $resultado = $key . '-' . $value . ' ';
    print_r($resultado);
}
?>