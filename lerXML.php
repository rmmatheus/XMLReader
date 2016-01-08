<?php
@header('Content-Type: text/html; charset=utf-8');
$xml = simplexml_load_file(__DIR__."/uploads/".$_POST["arquivo"]["name"]);
var_dump($xml);
foreach($xml->infCFe as $infCFe)
{
	echo "<tr><td>".$infCFe["versao"]."</td></tr>";
	echo "<tr><td>".$infCFe->ide->cUF."</td></tr>";
	echo "<tr><td>".$infCFe->emit->CNPJ."</td></tr>";
	echo "<tr><td>".$infCFe->Signature["xmlns"]."</td></tr>";
	/*echo utf8_decode($livro->autor);*/
}
?>

