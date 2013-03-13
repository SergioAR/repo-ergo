<?php
class Noticia{
	private $ID;
	private $titulo;
	private $texto;

	function __construct($id,$titulo,$texto){
		$this->ID = $id;
		$this->titulo = $titulo;
		$this->texto = $texto;
	}
	
	//GETTERS	
	public function getID(){return $this->ID;}	
	public function getTitulo(){return $this->titulo;}
	public function getTexto(){return $this->texto;}
	//SETTERS
	public function setTitulo($titulo){$this->titulo=$titulo;}
	public function setTexto($texto){$this->texto=$texto;}
}
?>