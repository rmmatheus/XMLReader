<?php
@header('Content-Type: text/html; charset=utf-8');
//DEBUGAR VIA PHP COLOCAR NA MAO O NOME DO ARQEUIVO
//$nome_arquivo = "GERADOPELOCFWINDOCUMENTOAUTORIZADO.xml";
$nome_arquivo = $_POST["arquivo"]["name"];

$caminho = "uploads/".$nome_arquivo;

$xml = simplexml_load_file($caminho);  //or die("ERRO: Nao foi possivel abrir o arquivo XML");

$valor = file_get_contents($caminho);
$valor = preg_replace('/[\x00-\x1F\x80-\xFF]/', '', $valor);
$varCFeReceita = substr($valor, 1, 6);
$varCFeCaixa = substr($valor, 1, 3);

//Lendo arquivo LOTE AUTORIZADO, Baixado da receita

if(strpos($varCFeReceita,"envCFe") === 0)
{
	foreach($xml->children() as $LoteCFe)
	{
		foreach($LoteCFe->children() as $CFe)
		{
			echo "<tr>";
			echo "<td>".$CFe->infCFe["Id"]."</td>";
			echo "<td>".$CFe->infCFe->ide->cNF."</td>";
			echo "<td>".$CFe->infCFe->ide->nserieSAT."</td>";
			echo "<td>".$CFe->infCFe->ide->nCFe."</td>";
			echo "<td>".$CFe->infCFe->ide->dEmi."</td>";
			echo "<td>".$CFe->infCFe->ide->hEmi."</td>";
			echo "<td>".$CFe->infCFe->total->vCFe."</td>";
			$lote = recuperaLote($xml);	
			echo "</tr>";		
		}		
	}
}
//Lendo arquivo Cfwin AUTORIZADO
if(strpos($varCFeCaixa,"CFe") === 0)
{
	foreach($xml->infCFe as $infCFe)
	{
		echo "<tr>";
		echo "<td>".$infCFe["Id"]."</td>";
		echo "<td>".$infCFe->ide->cNF."</td>";
		echo "<td>".$infCFe->ide->nserieSAT."</td>";
		echo "<td>".$infCFe->ide->nCFe."</td>";
		echo "<td>".$infCFe->ide->dEmi."</td>";
		echo "<td>".$infCFe->ide->hEmi."</td>";
		echo "<td>".$infCFe->total->vCFe."</td>";
		echo "<td>-</td>";
		echo "</tr>";
	}
}
	
function recuperaLote($xml)
{
	foreach($xml->idLote as $idLote)
	{
		echo "<td>".$idLote."</td>";
	}
}	
?>