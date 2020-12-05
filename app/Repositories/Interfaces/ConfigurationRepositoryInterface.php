<?php 

namespace App\Repositories\Interfaces;

interface ConfigurationRepositoryInterface
{
    /**
     * Request all records from database
     * table 
     * @return \App\Models\Configuration
     */ 
    public function queryAll();

    /**
     * Request unique record by id from
     * database table
     * @param int $id 
     * @return \App\Models\Configuration
     */ 
    public function queryById(int $id);
}
