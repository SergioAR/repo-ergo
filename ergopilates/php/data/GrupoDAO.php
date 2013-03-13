<?php
class GrupoDAO extends Grupo{
	private $db;

	function __construct($id,$nombre){
		parent::__construct($id,$nombre);
		$this->db=new MySQL();
	}

	public function getDB(){
		return $this->db;
	}

	public function addGrupo(){
		$string="INSERT INTO grupo (Nombre)
				VALUES ('".$this->getNombre()."')";
		$this->db->consulta($string);
	}

	public function getAllGrupos(){
		$string="SELECT * FROM grupo";
		$consulta=$this->db->consulta($string);
		return $consulta;
	}

	public function getGrupos(){
		$string="SELECT * FROM grupo WHERE nombre != 'Publico'";
		$consulta=$this->db->consulta($string);
		return $consulta;
	}

	public function getGruposByPermisos($usuarioID){
		$string="SELECT grupo.Nombre as Nombre, grupo.ID as ID FROM grupo
		INNER JOIN permisos ON permisos.grupo=grupo.ID 
		WHERE permisos.Usuario=".$usuarioID;
		$consulta=$this->db->consulta($string);
		return $consulta;
	}

	public function getGrupo($id){
		$string="SELECT * FROM grupo WHERE id=".$id;
		$consulta=$this->db->consulta($string);
		return $consulta;
	}

	function updateGrupo(){
		$string="UPDATE grupo
				SET nombre='".$this->getNombre()."' WHERE id=".$this->getID();
		$consulta=$this->db->consulta($string);
	}

	public function deleteGrupo(){
		$string="DELETE FROM grupo WHERE id=".$this->getID();
		$consulta=$this->db->consulta($string);
		return $consulta;
	}

	public function getGrupoPublico(){
		$string="SELECT * FROM grupo WHERE Nombre='Publico'";
		$consulta=$this->db->consulta($string);
		return $consulta;
	}
}
?>