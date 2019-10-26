<?php
require_once "DVD.php";
require_once "Leite.php";
date_default_timezone_set("America/Sao_Paulo")

//Estoque DVD
$DVD1 = new DVD(11, 10 "Thor", 2000);
$DVD2 = new DVD(22, 20 "Jurrasic", 2001);
$DVD3 = new DVD(33, 30 "Hulk", 2005);
$DVD4 = new DVD(44, 40 "Nao foram", 1997);

//Estoque leite
$Leite1 = new Leite (1,10, "Itambe", 900, "22/10/2019");
$Leite2 = new Leite (2,11, "Camponesa", 900, "3/10/2019");
$Leite3 = new Leite (3,12, "Ninho", 900, "24/10/2019");
$Leite4 = new Leite (4,13, "Italac", 900, "25/10/2019");
$Leite5 = new Leite (5,14, "Piracanjuba", 900, "26/10/2019");
$Leite6 = new Leite (6,15, "Jussara", 900, "27/10/2019");

//Array Estoque
$estoque = array($DVD1->codigo => $DVD1,
	$DVD2->codigo => $DVD2,
	$DVD3->codigo => $DVD3,
	$DVD4->codigo => $DVD4,
    $Leite1->codigo => $Leite1,
    $Leite2->codigo => $Leite2,
    $Leite3->codigo => $Leite3,
    $Leite4->codigo => $Leite4,
    $Leite5->codigo => $Leite5,
    $Leite6->codigo => $Leite6);

//Print filmes estoque
for($i = 1; $i <= 4; $i++){
echo "FILME: $i<br>$estoque[$i]<br><hr>";
}

//Print Leites estoque
$numero = 1;
for($i = 5; $i <= 10; $i++){
echo "LEITE: $numero<br>$estoque[$i]<br><hr>";
$numero++;
}

//Print leites vencidos
$mensagem = '';
for($i = 5; $i <= 10; $i++){
	if($estoque[$i]->estaVencido()){
		$mensagem .= $estoque[$i]->getMarca()."<br>";
	}
}
echo "Os leites a seguir estão vencidos: <br>$mensagem<br><hr>";

//Print Dvds de acordo com ano digitado
$anoDigitado = 2007;
$mensagemPegaAno = '';
$boolean = false;
for($i = 1; $i <= 4; $i++){
	if($estoque[$i]->getAno() == $anoDigitado){
		$mensagemPegaAno .= $estoque[$i]->getTitulo()."<br>";
		$boolean = true;
	}
	}if($boolean == true){
		echo "Os DVDs lançados em $anoDigitado são: <br>$mensagemPegaAno<br><hr>";
	}else{
		echo "Nenhum dos DVDs em estoque foi lançado no ano <br>$anoDigitado<br><hr>";
	}

//Soma preco produtos
$somaTotalProdutos = null;
for($i = 1; $i <= 10; $i++){
	$somaTotalProdutos += $estoque[$i]->preco;
}
echo "A soma total dos produtos em estoque é: $somaTotalProdutos<br>";	

//echo $produto1->preco;
//echo"<br><hr>";

//$perecivel = new Perecivel();
//echo $perecivel ->estaVencido("22/10/2019");
//$dataProduto = new DateTime ("2019-10-23");
//$dataAtual = new DateTime ("2019-10-24");
//var_dump($dataProduto > $dataAtual)

//$perecivel = new Perecivel();

//$produto2 = new Produto();
//var_dump($produto1);
//echo "<br><hr>";
//$produto1->setPreco(50);
//echo $produto1->getPreco();
 
//var_dump($produto2);






?>
