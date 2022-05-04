<?php


$curso = "\nDesing Patterns PHP II: Boas práticas de programação";

file_put_contents('curso-php.txt', $curso, FILE_APPEND);

// *** OUTRA FUNÇÃO PARA INCLUSAO DE INFORMAÇOES EM ARQUIVOS, MAIS UTILIZADA
// $curso = "Design Patterns PHP I: Boas práticas de programação";

// file_put_contents('cursos-php.txt', $curso);


// *** CRIA O ARQUIVO cursos-php.txt e inclui os 21 primeiros caracteres de $curso
// $arquivo = fopen('cursos-php.txt', 'w');

// $curso = 'Design Patterns PHP I: Boas práticas de programação';

// fwrite($arquivo, $curso, 21);

// fclose($arquivo);
