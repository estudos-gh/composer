<?php

namespace gabrieldesousah\DBInterface;

class ORM implements Db
{
		public function connect() :string
		{
				return "conectado";
		}

    public function select( bool $data )
    {
        if($data){
        	return [];
        }
        throw new \gabrieldesousah\MyException('Data deveria ser positivo', 1);
    }

    //Se der um echo na classe vai retornar a string tratada por esse método
    public function __toString()
    {
				return implode(', ', $this->data) . '.';
		}

}