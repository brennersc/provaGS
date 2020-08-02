<?php
function funcaoRecursiva($n)
{
    if ($n > '0' && $n % 2 == '0' && $n % 3 == '0' && $n % 10 == '0')
    {
        echo $n;
    }
    else
    {
        funcaoRecursiva($n + 1);
    }
}
funcaoRecursiva(0);
?>