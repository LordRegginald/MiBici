<?php

namespace Mibici;

class Estacion implements EstacionInterface {

	protected $anclajeLibres;
	protected $anclajeTotales;
	protected $bicicletas;

	public function _construct($a,$b) {
		$this->bicicletas=[]
		$this->anclajeLibres=$a;
		$this->anclajeTotales=$b;
	}
	
	public funtion sacarBici(BicicletaInterface $bici) {
		$clave = array_search($bici, $bicicletas);
		unset($bicicletas[$clave]);
	}
	
	public function dejarBici(BicicletaInterface $bici) {
		array_push($bici,$bicicletas);
	}

	public function anclajesTotales() {
		return $this->anclajeTotales;
	}

	public function anclajesDisponibles() {
		return $this->anclajeLibres;
	}

	public function bicicletasDisponibles() {
		return ($this->anclajeTotales - $this->anclajeLibres);
	}

	public function enServicio() {
		return $this->estado;
	}

}
