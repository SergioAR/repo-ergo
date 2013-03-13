<?php
class Usuario{
	private $ID;
	private $usuario;
	private $pass;
	private $nivel;

	function __construct($id,$usuario,$pass,$nivel){
		$this->ID = $id;
		$this->usuario = $usuario;
		$this->pass = $pass;
		$this->nivel = $nivel;
	}
	
	//GETTERS	
	public function getID(){return $this->ID;}	
	public function getUsuario(){return $this->usuario;}
	public function getPass(){return $this->pass;}
	public function getNivel(){return $this->nivel;}
	//SETTERS
	public function setUsuario($usuario){$this->usuario=$usuario;}
	public function setPass($pass){$this->pass=$pass;}
	public function setNivel($nivel){$this->nivel=$nivel;}
}
?>