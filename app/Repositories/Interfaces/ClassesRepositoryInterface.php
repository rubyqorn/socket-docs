<?php 

namespace App\Repositories\Interfaces;

interface ClassesRepositoryInterface
{
    /**
     * Request all records from database
     * table 
     * @return \App\Models\Classes
     */ 
    public function queryAll();

    /**
     * Request unique record by id from
     * database table
     * @param int $id 
     * @return \App\Models\Classes
     */ 
    public function queryById(int $id);
}
