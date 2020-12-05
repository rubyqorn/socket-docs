<?php 

namespace App\Http\Controllers\Configuration;

use App\Http\Controllers\Controller;
use App\Repositories\Interfaces\ConfigurationRepositoryInterface;

class ConfigurationViewController extends Controller 
{
    /**
     * @var \App\Repositories\ConfigurationRepositoryInterface 
     */ 
    protected ConfigurationRepositoryInterface $configurationRepository;

    /**
     * Initiate ConfigurationViewController constructor method
     * @param \App\Repositories\ConfigurationRepositoryInterface $configurationRepository
     * @return void 
     */ 
    public function __construct(ConfigurationRepositoryInterface $configurationRepository)
    {
        $this->configurationRepository = $configurationRepository;
    }

    /**
     * Display configuration page
     * @return \Illuminate\Support\Facades\View  
     */ 
    public function show()
    {
        return view('configuration')->withConfigurations($this->configurationRepository->queryAll());
    }
}
