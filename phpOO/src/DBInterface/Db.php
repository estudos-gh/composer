<?php

namespace gabrieldesousah\DBInterface;

// Desnecessário quando estão na mesma pasta
// use gabrieldesousah\DB\Mysql;

interface Db
{
    public function connect() :string;
}
