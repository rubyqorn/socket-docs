<?php 

namespace App\Http\Controllers\Methods;

use App\Http\Controllers\Controller;
use App\Repositories\Interfaces\MethodRepositoryInterface;

class MethodsViewController extends Controller 
{
    /**
     * @var \App\Repositories\Interfaces\MethodRepositoryInterface 
     */ 
    protected MethodRepositoryInterface $methodRepository;

    /**
     * Initiates MethodsViewController constructor method
     * @param \App\Repositories\Interfaces\MethodRepositoryInterface $methodRepository
     * @return void 
     */ 
    public function __construct(MethodRepositoryInterface $methodRepository)
    {
        $this->methodRepository = $methodRepository;
    }

    public function show()
    {
        return view('methods')->withMethods($this->methodRepository->queryAll());
    }
}
