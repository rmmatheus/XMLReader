<?php

$novoarquivo = fopen("C:/Intercamp/dados111.txt", "w+");
fwrite($novoarquivo, "teste1");
fclose($novoarquivo);

if ($_FILES['upload']) {
	
	$novoarquivo = fopen("C:/Intercamp/dados000.txt", "w+");
fwrite($novoarquivo, "teste2");
fclose($novoarquivo);
	
    $file_ary = reArrayFiles($_FILES['ufile']);

    foreach ($file_ary as $file) {
        print 'File Name: ' . $file['name'];
        print 'File Type: ' . $file['type'];
        print 'File Size: ' . $file['size'];
    }
}

function reArrayFiles(&$file_post) {

    $file_ary = array();
    $file_count = count($file_post['name']);
    $file_keys = array_keys($file_post);

    for ($i=0; $i<$file_count; $i++) {
        foreach ($file_keys as $key) {
            $file_ary[$i][$key] = $file_post[$key][$i];
        }
    }

    return $file_ary;
}

?>