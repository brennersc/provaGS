<?php
class ClassePoo
{
    private $n1;
    private $n2;
    private $n3;

    public function setNumero1($value)
    {
        $this->n1 = $value;
    }
    public function setNumero2($value)
    {
        $this->n2 = $value;
    }
    public function setNumero3($value)
    {
        $this->n3 = $value;
    }

    public function getMultiplicar()
    {
        return $this->n1 * $this->n2 * $this->n3;
    }
}
$resultado = new ClassePoo();
$resultado->setNumero1(1);
$resultado->setNumero2(2);
$resultado->setNumero3(3);

print_r($resultado->getMultiplicar());
?>