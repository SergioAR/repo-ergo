<?php
class Fichero{
	private $ID;
	private $ruta;
	private $titulo;
	private $grupo;

	function __construct($id,$titulo,$grupo,$ruta){
		$this->ID = $id;
		$this->titulo = $titulo;
		$this->grupo = $grupo;
		$this->ruta = $ruta;
	}
	
	//GETTERS	
	public function getID(){return $this->ID;}	
	public function getTitulo(){return $this->titulo;}
	public function getGrupo(){return $this->grupo;}
	public function getRuta(){return $this->ruta;}
	//SETTERS
	public function setTitulo($titulo){$this->titulo=$titulo;}
	public function setGrupo($grupo){$this->grupo=$grupo;}
	public function setRuta($ruta){$this->ruta=$ruta;}
}
?>