<?php
class Testimonio{
	private $ID;
	private $nombre;
	private $actividad;
	private $testimonio;
	private $foto;

	function __construct($id,$nombre,$actividad,$testimonio,$foto){
		$this->ID = $id;
		$this->nombre = $nombre;
		$this->actividad = $actividad;
		$this->testimonio = $testimonio;
		$this->foto = $foto;
	}
	
	//GETTERS	
	public function getID(){return $this->ID;}	
	public function getNombre(){return $this->nombre;}
	public function getActividad(){return $this->actividad;}
	public function getTestimonio(){return $this->testimonio;}
	public function getFoto(){return $this->foto;}
	
	//SETTERS
	public function setNombre($nombre){$this->nombre=$nombre;}
	public function setActividad($actividad){$this->actividad=$actividad;}
	public function setTestimonio($testimonio){$this->testimonio=$testimonio;}
	public function setFoto($foto){$this->foto=$foto;}
}

?>