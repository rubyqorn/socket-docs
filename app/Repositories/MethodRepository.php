<?php 

namespace App\Repositories;

use App\Models\Methods;
use App\Repositories\Interfaces\MethodRepositoryInterface;

class MethodRepository implements MethodRepositoryInterface
{
    /**
     * {@inheritdoc} 
     */ 
    public function queryAll()
    {
        return Methods::all();
    }

    /**
     * {@inheritdoc} 
     */ 
    public function queryById(int $id)
    {
        return Methods::findOrFail($id);
    }
}
