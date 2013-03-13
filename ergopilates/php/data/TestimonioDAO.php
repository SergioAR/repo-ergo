<?php
class TestimonioDAO extends Testimonio{
	private $db;
	
	function __construct($id,$nombre,$actividad,$testimonio,$foto){
		parent::__construct($id,$nombre,$actividad,$testimonio,$foto);
		$this->db=new MySQL();
	}
	
	public function getDB(){
		return $this->db;
	}
	
	public function addTestimonio(){
		$string="INSERT INTO testimonios (nombre,actividad,testimonio, foto)
				VALUES ('".$this->getNombre()."','".$this->getActividad()."','".$this->getTestimonio()."','".$this->getFoto()."')";
		$this->db->consulta($string);
	}
	
	public function getTestimonios(){
		$string="SELECT * FROM testimonios ORDER BY id DESC";	
		$consulta=$this->db->consulta($string);
		return $consulta;
	}

	public function getTestimoniosTop(){
		$string="SELECT * FROM testimonios ORDER BY id DESC limit 4";
		$consulta=$this->db->consulta($string);
		return $consulta;
	}
	
	public function getTestimonioByID($id){
		$string="SELECT * FROM testimonios WHERE id=".$id;	
		$consulta=$this->db->consulta($string);
		return $consulta;
	}
	
	function updateTestimonio(){
		$string="
			UPDATE testimonios
			SET nombre='".$this->getNombre()."',actividad='".$this->getActividad()."',testimonio='".$this->getTestimonio()."',
			foto='".$this->getFoto()."' WHERE id=".$this->getID();
		$consulta=$this->db->consulta($string);
	}
	
	public function deleteTestimonio(){
		$string="DELETE FROM testimonios WHERE id=".$this->getID();
		$consulta=$this->db->consulta($string);
		return $consulta;
	}
}
?>