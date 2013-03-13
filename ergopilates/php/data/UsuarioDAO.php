<?php
class UsuarioDAO extends Usuario{
	private $db;

	function __construct($id,$usuario,$pass,$nivel){
		parent::__construct($id,$usuario,$pass,$nivel);
		$this->db=new MySQL();
	}

	public function getDB(){
		return $this->db;
	}

	public function addUsuario(){
		$string="INSERT INTO usuarios (usuario,pass,nivel)
				VALUES ('".$this->getUsuario()."','".$this->getPass()."',".$this->getNivel().")";
		$this->db->consulta($string);
	}

	public function getUsuarios(){
		$string="SELECT * FROM usuarios";
		$consulta=$this->db->consulta($string);
		return $consulta;
	}

	public function getUser($id){
		$string="SELECT * FROM usuarios WHERE id=".$id;
		$consulta=$this->db->consulta($string);
		return $consulta;
	}

	function updateUsuario(){
		$string="
				UPDATE usuarios
				SET usuario='".$this->getUsuario()."',pass='".$this->getPass()."',nivel='".$this->getNivel()."'
				WHERE id=".$this->getID();
		$consulta=$this->db->consulta($string);
	}

	public function deleteUsuario(){
		$string="DELETE FROM usuarios WHERE id=".$this->getID();
		$consulta=$this->db->consulta($string);
		return $consulta;
	}


	public function addPermisos($last,$grupo){
		$string= "INSERT INTO permisos (Usuario,Grupo)
						VALUES (".$last.",".$grupo.")";
		$this->db->consulta($string);
	}

	public function getPermisos($id){
		$string="SELECT Grupo FROM permisos WHERE Usuario=".$id;
		$consulta=$this->db->consulta($string);
		return $consulta;
	}

	public function deletePermisos(){
		$string="DELETE FROM permisos WHERE usuario=".$this->getID();
		$consulta=$this->db->consulta($string);
	}
}
?>