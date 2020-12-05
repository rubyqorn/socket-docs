<?php 

namespace App\Repositories;

use App\Models\Classes;
use App\Repositories\Interfaces\ClassesRepositoryInterface;

class ClassesRepository implements ClassesRepositoryInterface
{
    /**
     * {@inheritdoc} 
     */ 
    public function queryAll()
    {
        return Classes::all();
    }

    /**
     * {@inheritdoc} 
     */ 
    public function queryById(int $id)
    {
        return Classes::findOrFail($id);
    }
}
