<?php
require __DIR__ . '/src/Autoload.php';

$autoload = new gabrieldesousah\Autoload;
$autoload->register();
$autoload->addNamespace('gabrieldesousah', 'src');