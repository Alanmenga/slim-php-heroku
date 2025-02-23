<?php
/******************************************************************************

Mengassini Alan
Codificar las clases Punto y Rectangulo.

La clase Punto ha de tener dos atributos privados con acceso de sólo lectura (sólo con
getters), que serán las coordenadas del punto. Su constructor recibirá las coordenadas del
punto.
La clase Rectangulo tiene los atributos privados de tipo Punto _vertice1, _vertice2, _vertice3
y _vertice4 (que corresponden a los cuatro vértices del rectángulo).
La base de todos los rectángulos de esta clase será siempre horizontal. Por lo tanto, debe tener
un constructor para construir el rectángulo por medio de los vértices 1 y 3.
Los atributos ladoUno, ladoDos, área y perímetro se deberán inicializar una vez construido el
rectángulo.
Desarrollar una aplicación que muestre todos los datos del rectángulo y lo dibuje en la página.

*******************************************************************************/

class Punto
{
    private $_x;
    private $_y;

    public function __construct($x,$y)
    {
        $this->_x = $x;
        $this->_y = $y;
    }

    public function GetX()
    {
        return $this->_x;
    }
    
    public function GetY()
    {
        return $this->_y;
    }
}

class Rectangulo
{
	private $_vertice1;
	private $_vertice2;
	private $_vertice3;
	private $_vertice4;
	private $area;
	private $ladoDos;
	private $ladoUno;
	private $perímetro;

	public function __construct($v1,$v3)
    {
        $this->_vertice1 = $v1;
        $this->_vertice2 = new Punto($v1->GetX(), $v3->GetY());
        $this->_vertice3 = $v3;
        $this->_vertice4 = new Punto($v3->GetX(), $v1->GetY());
        $this->ladoUno = $v3->GetY() - $v1->GetY() + 1;//Esta bien esto????????
        $this->ladoDos = $v3->GetX() - $v1->GetX() + 1;//Esta bien esto????????
        $this->perimetro = $this->ladoUno*2 + $this->ladoDos*2;
        $this->area = $this->ladoUno*$this->ladoDos;
    }

    public function Dibujar()
    {
    	$y = $this->_vertice1->GetY() * 10;
    	$x = $this->_vertice1->GetX() * 10;

    	$retorno = "<p style=position:absolute;top:$y%;left:$x%;>";
    	$columnas = $this->ladoUno;
    	$filas = $this->ladoDos;

    	for ($j=0; $j < $filas ; $j++) {             
            for ($i=0; $i < $columnas; $i++) { 
                if($i == 0 || $i == $columnas-1 || $j == 0 || $j == $filas - 1){
                    $retorno .= "*&nbsp;";
                }
                else{
                    $retorno .= "&nbsp;&nbsp;&nbsp;";
                }                
            }         
            $retorno .= "<br>";
        }
        $retorno.= "</p>";        
        return $retorno;        
    }

	public function __toString()
	{
        return $this->Dibujar();
    }
}

$rec = new Rectangulo(new Punto(0,0), new Punto(15,6));
$rec2 = new Rectangulo(new Punto(5,3), new Punto(20,9));
echo($rec);
echo($rec2);

?>