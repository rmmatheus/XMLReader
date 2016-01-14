<?php
@header('Content-Type: text/html; charset=utf-8');
//DEBUGAR VIA PHP COLOCAR NA MAO O NOME DO ARQEUIVO
//$nome_arquivo = "GERADOPELOCFWINDOCUMENTOAUTORIZADO.xml";
$nome_arquivo = $_POST["arquivo"]["name"];

$caminho = "uploads/".$nome_arquivo;

$xml = simplexml_load_file($caminho);

$valor = file_get_contents($caminho);
$valor = substr($valor, 1, 3);

echo "<tr>";

if(strpos($valor,"env") === 0){
	foreach($xml->LoteCFe as $LoteCFe)
	{
		echo "<td>".$LoteCFe->CFe->infCFe["Id"]."</td>";
		echo "<td>".$LoteCFe->CFe->infCFe->ide->cNF."</td>";
		echo "<td>".$LoteCFe->CFe->infCFe->ide->nserieSAT."</td>";
		echo "<td>".$LoteCFe->CFe->infCFe->ide->nCFe."</td>";
		echo "<td>".$LoteCFe->CFe->infCFe->ide->dEmi."</td>";
		echo "<td>".$LoteCFe->CFe->infCFe->ide->hEmi."</td>";
		echo "<td>".$LoteCFe->CFe->infCFe->total->vCFe."</td>";
			
	}
	$lote = recuperaLote($xml);	
	
}else{
	foreach($xml->infCFe as $infCFe)
	{
		echo "<td>".$infCFe["Id"]."</td>";
		echo "<td>".$infCFe->ide->cNF."</td>";
		echo "<td>".$infCFe->ide->nserieSAT."</td>";
		echo "<td>".$infCFe->ide->nCFe."</td>";
		echo "<td>".$infCFe->ide->dEmi."</td>";
		echo "<td>".$infCFe->ide->hEmi."</td>";
		echo "<td>".$infCFe->total->vCFe."</td>";
		echo "<td>-</td>";
	}
}

echo "</tr>";
	
function recuperaLote($xml){
	foreach($xml->idLote as $idLote)
	{
		echo "<td>".$idLote."</td>";
	}
}	
?>