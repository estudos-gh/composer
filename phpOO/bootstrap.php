<?php

require __DIR__ . '/autoload.php';

// var_dump((new gabrieldesousah\DB\Db)->connect());
// var_dump((new gabrieldesousah\DB\MySql)->connect());

// // Com interfaces -> Polimorfismo
// var_dump((new gabrieldesousah\DBInterface\Postgres)->connect());
// var_dump((new gabrieldesousah\DBInterface\MySql)->connect());


// $types = new gabrieldesousah\Types\Types;

// $types->setString('Gabriel');
// $types->setInteger(1);
// $types->setFloat(2.5);

// var_dump($types);

try {
	( new gabrieldesousah\DBInterface\ORM )->select(false);
} catch ( gabrieldesousah\MyException $e ) {
	echo $e->getMessage();
}