<?php
//Arquivo index responsável pela inicialização do sistema

require_once 'system\configuration.php';
include_once 'helpers.php';

$texto = 'texto para resumir';

echo saudacao();
echo '<hr>';
//echo resumirTexto($texto, 50);