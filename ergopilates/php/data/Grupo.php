<?php
class Grupo{
	private $ID;
	private $nombre;


	function __construct($id,$nombre){
		$this->ID = $id;
		$this->nombre = $nombre;
	}
	
	//GETTERS	
	public function getID(){return $this->ID;}	
	public function getNombre(){return $this->nombre;}
	//SETTERS
	public function setNombre($nombre){$this->nombre=$nombre;}
}
?>