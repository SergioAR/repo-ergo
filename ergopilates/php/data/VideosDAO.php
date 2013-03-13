<?php
class VideosDAO extends Videos{
	private $db;

	function __construct ($id,$nombre,$descripcion,$ruta){		
		parent::__construct($id,$nombre,$descripcion,$ruta);
		$this->db=new MySQL();
	}
	
	public function getDB(){
		return $this->db;
	}

	function addVideo(){
		$string="
		INSERT INTO videos (nombre,descripcion,ruta) VALUES ('".$this->getNombre()."','".$this->getDescripcion()."','".$this->getRuta()."')";
		$this->db->consulta($string);
	}
	
	function updateVideo(){
		$string="
		UPDATE videos
		SET nombre='".$this->getNombre()."',descripcion='".$this->getDescripcion()."',ruta='".$this->getRuta()."'
		WHERE id=".$this->getID();
		$consulta=$this->db->consulta($string);	
	}
	
	function getVideos(){
		$string="select id,nombre,descripcion,ruta from videos ";
		$consulta=$this->db->consulta($string);	
		return $consulta;
	}
	
	function getVideo($id){
		$string="select id,nombre,descripcion,ruta from videos WHERE id=".$id;
		$consulta=$this->db->consulta($string);
		return $consulta;
	}
	
	public function deleteVideo(){		
		$string="DELETE FROM videos WHERE id=".$this->getID();			
		$consulta=$this->db->consulta($string);
		return $consulta;
	}
}
?>