<?php
require_once "Produto.php";
class DVD extends Produto{
 
   private $titulo;
   private $ano;

public function __construct($codigo, $preco,$titulo, $ano){       
		if(is_null($codigo) || is_null($preco) || is_null($titulo) || is_null($ano)){
			throw new InformacaoNulaException();
		}else{
		parent::__construct($codigo, $preco);
		$this->titulo = $titulo;
		$this->ano = $ano;
		}
	}	

public function setTitulo($titulo){
	 $this->titulo = $titulo;
}

public function getTitulo(){
	 return $this->titulo;
}

public function setAno($ano){
	 $this->ano = $ano;
}

public function getAno(){
	 return $this->ano;
}
public function __toString(){
		return 	"Codigo: $this->codigo<br>
				Preco: $this->preco<br> 
				Titulo: $this->titulo<br>
				Ano: $this->ano";			
	}

}

?>
