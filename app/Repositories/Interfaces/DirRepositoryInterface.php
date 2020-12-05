<?php 

namespace App\Repositories\Interfaces;

interface DirRepositoryInterface
{
    /**
     * Request all records from database
     * table 
     * @return \App\Models\Dir
     */ 
    public function queryAll();

    /**
     * Request unique record by id from
     * database table
     * @param int $id 
     * @return \App\Models\Dir
     */ 
    public function queryById(int $id);
}
