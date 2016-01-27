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
$varCFeCaixaCan= substr($valor, 1, 7);
$varCFeReceitaCan = substr($valor, 1, 7);
$contadorXml = 0; 


//Lendo arquivo XML SAT LOTE AUTORIZADO, Baixado da receita
if(strpos($varCFeReceita,"envCFe") === 0)
{
	foreach($xml->children() as $LoteCFe)
	{
		foreach($LoteCFe->children() as $CFe)
		{
			definecor($contadorXml);
			echo "<td>".$CFe->infCFe["Id"]."</td>";
			echo "<td>".$CFe->infCFe->ide->nserieSAT."</td>";
			echo "<td>".$CFe->infCFe->ide->nCFe."</td>";
            converteDataBr($data = $CFe->infCFe->ide->dEmi);
            formataHora($hora = $CFe->infCFe->ide->hEmi);
			echo "<td>".$CFe->infCFe->total->vCFe."</td>";
			$lote = recuperaLote($xml);
			echo "</tr>";
			$contadorXml++;
			$valor_documento = $valor_documento + $CFe->infCFe->total->vCFe;
		}
	}

}
//Lendo arquivo XML SAT Cfwin AUTORIZADO
if(strpos($varCFeCaixa,"CFe") === 0)
{
	foreach($xml->infCFe as $infCFe)
	{
		//definecor($contadorXml);
		echo "<tr>";
		echo "<td>".$infCFe["Id"]."</td>";
		echo "<td>".$infCFe->ide->nserieSAT."</td>";
		echo "<td>".$infCFe->ide->nCFe."</td>";
        converteDataBr($data = $infCFe->ide->dEmi);
        formataHora($hora = $infCFe->ide->hEmi);
		echo "<td>".$infCFe->total->vCFe."</td>";
		echo "<td>-</td>";
		echo "</tr>";
		$contadorXml++;
		$valor_documento = $valor_documento + $infCFe->total->vCFe;

	}
}

// ********************************************************DOCUMENTOS SAT CANCELADOS
//Lendo arquivo XML SAT Cfwin CANCELADO
if(strpos($varCFeCaixaCan,"CFeCanc") === 0)
{
    foreach($xml->infCFe as $infCFe)
    {
        definecor($contadorXml);
        echo "<td>".$infCFe["Id"]."</td>";
        echo "<td>".$infCFe->ide->nserieSAT."</td>";
        echo "<td>".$infCFe->ide->nCFe."</td>";
        converteDataBr($data = $infCFe->ide->dEmi);
        formataHora($hora = $infCFe->ide->hEmi);
        echo "<td>".$infCFe->total->vCFe."</td>";
        echo "<td>-</td>";
        echo "</tr>";
        $contadorXml++;
        $valor_documento = $valor_documento + $infCFe->total->vCFe;
    }
}


//Lendo arquivo XML SAT LOTE CANCELADO, Baixado da receita
if(strpos($varCFeReceitaCan,"cancCFe") === 0) {
    foreach ($xml->children() as $LoteCFe) {
        foreach ($LoteCFe->children() as $CFe) {	
			definecor($contadorXml);
            echo "<td>" . $CFe->infCFe["Id"] . "</td>";
            echo "<td>" . $CFe->infCFe->ide->nserieSAT . "</td>";
            echo "<td>" . $CFe->infCFe->ide->nCFe . "</td>";
            converteDataBr($data = $CFe->infCFe->ide->dEmi);
            formataHora($hora = $CFe->infCFe->ide->hEmi);
            echo "<td>" . $CFe->infCFe->total->vCFe . "</td>";
            $lote = recuperaLote($xml);
            echo "</tr>";
            $contadorXml++;
            $valor_documento = $valor_documento + $CFe->infCFe->total->vCFe;
			
        }
    }
}



//echo "<tr>";
//echo "<td style='font-weight:bold'>Total de itens por documento <input type='hidden' class='total_itens' value='". $contadorXml."'/>" .$contadorXml."</td>";
//echo "<td></td>";
//echo "<td></td>";
//echo "<td></td>";
//echo "<td></td>";
//echo "<td style='font-weight:bold'>R$ <input type='hidden' class='total_item' value='". $valor_documento."'/>".$valor_documento."</td>";
//echo "<td></td>";
//echo "</tr>";

echo "<input type='hidden' class='total_itens' value='".$contadorXml."'/>";
echo "<input type='hidden' class='total_item' value='".$valor_documento."'/>";






// FUNCOES
function recuperaLote($xml)
{
	foreach($xml->idLote as $idLote)
	{
		echo "<td>".$idLote."</td>";
	}
}

function definecor($contadorXml)
{
	if($contadorXml % 2 == 0)
		echo '<tr class= "normalRow">';
	else
		echo '<tr class= "alternateRow">';
}

// Recebe data no formato americano 20151130 ano mes dia e converte para formato BR dia mes ano
function converteDataBr($data)
{
	echo "<td>".$dia = substr($data, 6, 7)."/".$mes = substr($data, 4, 2)."/".$ano = substr($data, 0, 4)."</td>";
}

// Recebe Hora sem formatacao e coloca : entre hora minutos e segundos
function formataHora($hora)
{
    echo "<td>".$hora = substr($hora, 0, 2).":".$minutos = substr($hora, 2, 2).":".$segundos = substr($hora, 4, 6)."</td>";
}


?>

