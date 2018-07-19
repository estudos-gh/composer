<?php

namespace gabrieldesousah\DBInterface;

class Postgres implements Db
{
    public function connect() :string
    {
    	return 'connected to Postgres';    
    }
}
