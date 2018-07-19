<?php

namespace gabrieldesousah\Types;

/**
 * summary
 */
class Types
{
    private $data = [];
    
    public function setString(string $name)
    {
		// if( !is_string($name) ){
		// 	die('Não é uma string');
		// }
        // return $name;

        $this->data[] = $name;
    }

    public function setInteger(int $number)
    {
        $this->data[] = $number;
    }

    public function setFloat(float $float)
    {
        $this->data[] = $float;
    }
}