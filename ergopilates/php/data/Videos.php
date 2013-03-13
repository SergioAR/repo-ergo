<?php
class Videos{
	private $ID;
	private $nombre;
	private $descripcion;
	private $ruta;
	
	//CONSTRUCTOR
	function __construct ($id,$nombre,$descripcion,$ruta){
		$this->ID=$id;
		$this->nombre=$nombre;
		$this->descripcion=$descripcion;
		$this->ruta=$ruta;		
	}
	//GETTERS
	public function getID(){return $this->ID;}
	public function getNombre(){return $this->nombre;}
	public function getDescripcion(){return $this->descripcion;}
	public function getRuta(){return $this->ruta;}
	//SETTERS
	public function setNombre($nombre){$this->nombre=$nombre;}
	public function setDescripcion($descripcion){$this->descripcion=$descripcion;}
	public function setRuta($ruta){$this->ruta=$ruta;}	
}
?>