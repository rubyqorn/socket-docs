<?php 

namespace App\Http\Controllers\Methods;

use App\Http\Controllers\Controller;
use App\Repositories\Interfaces\MethodRepositoryInterface;
use App\Models\Methods;

class MethodViewController extends Controller 
{
    /**
     * @var \App\Repositories\Interfaces\MethodRepositoryInterface 
     */ 
    protected MethodRepositoryInterface $methodRepository;

    /**
     * Initiate MethodViewController constructor method
     * @param \App\Repositories\Interfaces\MethodRepositoryInterface $methodRepository
     * @return void 
     */ 
    public function __construct(MethodRepositoryInterface $methodRepository)
    {
        $this->methodRepository = $methodRepository;
    }

    /**
     * Display single method page by id
     * value
     * @param int $id 
     * @return \Illuminate\Support\Facades\View  
     */ 
    public function show(int $id)
    {
        return view('method')->withMethod($this->methodRepository->queryById($id));
    }
}
