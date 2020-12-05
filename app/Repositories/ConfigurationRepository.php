<?php 

namespace App\Repositories;

use App\Models\Configurations;
use App\Repositories\Interfaces\ConfigurationRepositoryInterface;

class ConfigurationRepository implements ConfigurationRepositoryInterface
{
    /**
     * {@inheritdoc} 
     */ 
    public function queryAll()
    {
        return Configurations::all();
    }

    /**
     * {@inheritdoc} 
     */ 
    public function queryById(int $id)
    {
        return Configurations::findOrFail($id);
    }
}
