<?php
class FicheroDAO extends Fichero{
	private $db;

	function __construct($id,$titulo,$grupo,$ruta){
		parent::__construct($id,$titulo,$grupo,$ruta);
		$this->db=new MySQL();
	}

	public function getDB(){
		return $this->db;
	}

	public function addFichero(){
		$string="INSERT INTO fichero (Nombre,Grupo,Ruta)
				VALUES ('".$this->getTitulo()."','".$this->getGrupo()."','".$this->getRuta()."')";
		$this->db->consulta($string);
	}

	public function getFicheros(){
		$string="SELECT fichero.ID, fichero.Nombre,fichero.Ruta, grupo.nombre as Grupo
		FROM fichero
		INNER JOIN grupo ON fichero.grupo=grupo.ID
		ORDER BY grupo.ID
		";
		$consulta=$this->db->consulta($string);
		return $consulta;
	}
	
	public function getFicherosByGrupo($grupo){
		$string="SELECT fichero.ID, fichero.Nombre,fichero.Ruta, grupo.nombre as Grupo
			FROM fichero
			INNER JOIN grupo ON fichero.grupo=grupo.ID
			WHERE fichero.grupo=".$grupo.
			" ORDER BY grupo.ID";
		$consulta=$this->db->consulta($string);
		return $consulta;
	}
	
	
	public function getFichero($id){
		$string="SELECT * FROM fichero WHERE id=".$id;
		$consulta=$this->db->consulta($string);
		return $consulta;
	}

	function updateFichero(){
		$string="UPDATE fichero
				SET nombre='".$this->getTitulo()."',grupo='".$this->getGrupo()."' WHERE id=".$this->getID();
		$consulta=$this->db->consulta($string);
	}
	
	public function deleteFichero(){
		$string="DELETE FROM fichero WHERE ID=".$this->getID();
		$consulta=$this->db->consulta($string);
		return $consulta;
	}
}
?>