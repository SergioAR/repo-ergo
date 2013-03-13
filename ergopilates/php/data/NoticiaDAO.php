<?php
class NoticiaDAO extends Noticia{
	private $db;

	function __construct($id,$titulo,$texto){
		parent::__construct($id,$titulo,$texto);
		$this->db=new MySQL();
	}

	public function getDB(){
		return $this->db;
	}

	public function addNoticia(){
		$string="INSERT INTO noticias (Titulo,Noticia)
				VALUES ('".$this->getTitulo()."','".$this->getTexto()."')";
		$this->db->consulta($string);
	}

	public function getNoticias(){
		$string="SELECT * FROM noticias ORDER BY ID desc";
		$consulta=$this->db->consulta($string);
		return $consulta;
	}
	
	public function getNoticiasTop(){
		$string="SELECT * FROM noticias ORDER BY ID desc limit 3";
		$consulta=$this->db->consulta($string);
		return $consulta;
	}
	
	public function getNoticia($id){
		$string="SELECT * FROM noticias WHERE id=".$id;
		$consulta=$this->db->consulta($string);
		return $consulta;
	}

	function updateNoticia(){
		$string="UPDATE noticias
				SET titulo='".$this->getTitulo()."',noticia='".$this->getTexto()."' WHERE id=".$this->getID();
		$consulta=$this->db->consulta($string);
	}
	
	public function deleteNoticia(){
		$string="DELETE FROM noticias WHERE id=".$this->getID();
		$consulta=$this->db->consulta($string);
		return $consulta;
	}
}
?>