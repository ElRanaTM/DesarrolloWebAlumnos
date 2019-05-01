<?php

/**
 * 
 */
class Laboratorio2
{
	private $n;
	private $cadena;
	private $a;
	private $b;
	private $c;
	
	public function __construct($n_, $cadena_, $a_, $b_, $c_)
	{
		$this->n = $n_;
		$this->cadena = $cadena_;
		$this->a = $a_;
		$this->b = $b_;
		$this->c = $c_;
	}

	public function get_n(){
		return $this->n;
	}

	public function get_cadena(){
		return $this->cadena;
	}

	public function get_a(){
		return $this->a;
	}

	public function get_b(){
		return $this->b;
	}

	public function get_c(){
		return $this->c;
	}

	public function set_n($n_){
		$this->n = $n_;
	}

	public function set_cadena($cadena_){
		$this->cadena = $cadena_;
	}

	public function set_a_b_c($a_,$b_,$c_){
		$this->a = $a_;
		$this->b = $b_;
		$this->c = $c_;
	}

	public function calcularFibonaci()
	{
		$n1 = 1;
		$n2 = 0;
		for ($i=0; $i < $this->n; $i++) { 
			$suma = $n1 + $n2;
			$n1 = $n2;
			$n2 = $suma;
			echo $suma." ";
		}
	}

	public function calcularMayor()
	{
		if ($this->a > $this->b)
			if ($this->a > $this->c)
				return $this->a;
			else
				return $this->c;
		elseif ($this->b > $this->c)
			return $this->b;
		else
			return $this->c;
	}

	public function piramide()
	{
		$res = "";
		$lon = strlen($this->cadena);
		$res = $this->cadena[$lon/2];
		echo $res;
		for ($i=0; $i < $lon/2; $i++) { 
			$res = $this->cadena[($lon/2)-$i].$res.$this->cadena[($lon/2)+$i];
			echo $res;
			echo "<br>";
		}
	}
}

?>