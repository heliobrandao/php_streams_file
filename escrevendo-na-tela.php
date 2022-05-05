<?php

//fwrite(STDERR, 'Olá mundo');
// echo "olá mundo";

$cursos = fopen ('zip://arquivos.zip#cursos-php.txt', 'r');
stream_copy_to_stream($cursos, STDOUT);

