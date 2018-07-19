<?php

namespace gabrieldesousah\DB;

class MySql extends Db
{
    public function connect() :string
    {
    	return 'connected to MySql';    
    }
}
