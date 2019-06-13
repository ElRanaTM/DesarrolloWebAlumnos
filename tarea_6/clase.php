<?php  
/**
 * Clase del armario que recibe los libros
 */
class Estante
{
	public function __construct()
	{
		$this->fila1 = array();
		$this->fila2 = array();
		$this->fila3 = array();
		$this->tope1 = 0;
		$this->tope2 = 0;
		$this->tope3 = 0;
	}

	public function insertarLibro($fila, $livro)
	{
		switch ($fila) {
			case 1:
				array_push($this->fila1, $livro);
				$this->tope1++;
				break;
			case 2:
				array_push($this->fila2, $livro);
				$this->tope2++;
				break;
			case 3:
				array_push($this->fila3, $livro);
				$this->tope3++;
				break;
			
			default:
				error_log("No ha ingresado un arreglo correcto");
				break;
		}
	}
	public function eliminarLibro($fila)
	{
		switch ($fila) {
			case 1:
				if ($this->tope1 == 0)
					error_log("esta fila esta vacia");
				array_pop($this->fila1);
				$this->tope1--;
				break;
			case 2:
				if ($this->tope2 == 0)
					error_log("esta fila esta vacia");
				array_pop($this->fila2);
				$this->tope2--;
				break;
			case 3:
				if ($this->tope3 == 0)
					error_log("esta fila esta vacia");
				array_pop($this->fila3);
				$this->tope3--;
				break;
			
			default:
				error_log("No ha ingresado un arreglo correcto");
				break;
		}
	}
	public function mostrar($fila)
	{
		switch ($fila) {
			case 1:
				for ($i=0; $i < $this->tope1; $i++) { 
					echo $this->fila1[$i];
				}
				break;
			case 2:
				for ($i=0; $i < $this->tope2; $i++) { 
					echo $this->fila2[$i];
				}
				break;
			case 3:
				for ($i=0; $i < $this->tope3; $i++) { 
					echo $this->fila3[$i];
				}
				break;
			
			default:
				error_log("No ha ingresado un arreglo correcto");
				break;
		}
	}
	public function mostrarArmario()
	{
		echo "fila 1:<br>";
		$this->mostrar(1);
		echo "<br>fila 2:<br>";
		$this->mostrar(2);
		echo "<br>fila 3:<br>";
		$this->mostrar(3);
	}
}

?>