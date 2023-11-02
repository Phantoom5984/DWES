<?php /* CalculadoraTest.php */
use Calculadora;
use PHPUnit\Framework\TestCase;
class CalculadoraTest extends TestCase
{ //El nombre de las funciones de pruebas debe comenzar por test*
public function testSumar()
{
$cal = new Calculadora();
$this->assertEquals(6,$cal->sumar(2,4),"2+4 debe dar 6");
$this->assertEquals(8,$cal->sumar(7,1),"7+1 debe dar 8");
$this->assertEquals(5,$cal->sumar(3,8),"3+8 debe dar 11");
}
public function testRestar()
{
$cal = new Calculadora();
$this->assertEquals(6,$cal->restar(8,2),"8-2 debe dar 6");
$this->assertEquals(8,$cal->restar(18,10),"18-10 debe dar 8");
$this->assertEquals(5,$cal->restar(7,3),"7-3 debe dar 4");
}
public function testMultiplicar()
{
$cal = new Calculadora();
$this->assertEquals(6,$cal->multiplicar(3,2),"3*2 debe dar 6");
$this->assertEquals(8,$cal->multiplicar(8,1),"8*1 debe dar 8");
$this->assertEquals(5,$cal->multiplicar(4,6),"4*6 debe dar 24");
}
public function testDividir()
{
$cal = new Calculadora();
$this->assertEquals(6,$cal->dividir(24,4),"24/4 debe dar 6");
$this->assertEquals(8,$cal->dividir(64,8),"64/8 debe dar 8");
$this->assertEquals(5,$cal->dividir(50,5),"50/5 debe dar 10");
}
}
?>