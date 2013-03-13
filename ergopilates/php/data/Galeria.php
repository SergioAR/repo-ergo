<?php
class Galeria{
	private $ID;
	private $ruta;
	private $titulo;
	private $info;

	function __construct($id,$titulo,$info,$ruta){
		$this->ID = $id;
		$this->titulo = $titulo;
		$this->info = $info;
		$this->ruta = $ruta;
	}
	
	//GETTERS	
	public function getID(){return $this->ID;}	
	public function getTitulo(){return $this->titulo;}
	public function getInfo(){return $this->info;}
	public function getRuta(){return $this->ruta;}
	//SETTERS
	public function setTitulo($titulo){$this->titulo=$titulo;}
	public function setInfo($info){$this->info=$info;}
	public function setRuta($ruta){$this->ruta=$ruta;}
}
?>