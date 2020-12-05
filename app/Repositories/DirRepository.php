<?php 

namespace App\Repositories;

use App\Models\Dir;
use App\Repositories\Interfaces\DirRepositoryInterface;

class DirRepository implements DirRepositoryInterface
{
    /**
     * {@inheritdoc} 
     */ 
    public function queryAll()
    {
        return Dir::all();
    }

    /**
     * {@inheritdoc} 
     */ 
    public function queryById(int $id)
    {
        return Dir::findOrFail($id);
    }
}
