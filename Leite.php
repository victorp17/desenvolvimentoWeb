<?php
require_once "Perecivel.php";
require_once "Produto.php";
class Leite extends Produto implements Perecivel{

   private $marca;
   private $volume;
   private $dataValidade;

   	public function estaVencido(){
		$dataHoje = date("d/m/Y");
		if($this ->dataValidade > $dataHoje){
          return false;
      }else{
			return true;
		}
	}

   public function __construct($codigo, $preco, $marca, $volume, $dataValidade){
	parent::__construct($codigo,$preco)
		$this->marca = $marca;
		$this->preco = $preco;
		$this->$dataValidade = $dataValidade;	

public function setMarca($marca){
	 $this->marca = $marca;
}

public function getMarca(){
	 return $this->marca;
}

public function setVolume($volume){
	 $this->volume = $volume;
}

public function getVolume(){
	 return $this->volume;
}


public function setDataValidade($dataValidade){
	 $this->dataValidade = $dataValidade;
}

public function getDataValidade(){
	 return $this->dataValidade;
}

}

?>
