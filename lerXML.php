<?php
@header('Content-Type: text/html; charset=utf-8');
$xml = simplexml_load_file($_POST["arquivo"]["name"]);

foreach($xml->livro as $livro)
{
	echo $livro->cod;
	echo "<tr><td>".$livro->titulo."</td></tr>";
	/*echo utf8_decode($livro->autor);*/
}
?>