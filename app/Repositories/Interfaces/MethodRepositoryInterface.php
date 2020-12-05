<?php 

namespace App\Repositories\Interfaces;

interface MethodRepositoryInterface
{
    /**
     * Request all records from database
     * table 
     * @return \App\Models\Methods
     */ 
    public function queryAll();

    /**
     * Request unique record by id from
     * database table
     * @param int $id 
     * @return \App\Models\Methods
     */ 
    public function queryById(int $id);
}
