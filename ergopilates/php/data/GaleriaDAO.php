<?php
class GaleriaDAO extends Galeria{
	private $db;

	function __construct($id,$titulo,$grupo,$ruta){
		parent::__construct($id,$titulo,$grupo,$ruta);
		$this->db=new MySQL();
	}

	public function getDB(){
		return $this->db;
	}

	public function addGaleria(){
		$string="INSERT INTO galeria (titulo,info,ruta)
				VALUES ('".$this->getTitulo()."','".$this->getInfo()."','".$this->getRuta()."')";
		$this->db->consulta($string);
	}

	public function getGaleria(){
		$string="SELECT * FROM galeria";
		$consulta=$this->db->consulta($string);
		return $consulta;
	}

	public function deleteGaleria(){
		$string="DELETE FROM galeria WHERE ID=".$this->getID();
		$consulta=$this->db->consulta($string);
		return $consulta;
	}
}
?>