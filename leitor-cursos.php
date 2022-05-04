<?php

$cursos = file_get_contents('lista-cursos.txt'); //retorna todo arquivo
$curso = file('lista-cursos.txt');//retorna em formato de array 
var_dump($curso);


// $arquivo = fopen('lista-cursos.txt','r');

// **** LENDO ARQUIVO INTEIRO MUITO CUIDADO TAMANHO LIMITADO
// $tamanhoDoArquivo = filesize('lista-cursos.txt');
// $cursos = fread($arquivo, $tamanhoDoArquivo);
// echo $cursos;

// **** LENDO ARQUIVO LINHA A LINHA
// while (!feof($arquivo)) {
//   $curso = fgets($arquivo);

//   echo $curso;
// }

// fclose($arquivo);