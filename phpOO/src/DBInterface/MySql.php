<?php

namespace gabrieldesousah\DBInterface;

class MySql implements Db
{
    public function connect() :string
    {
    	return 'connected to MySql';    
    }
}
