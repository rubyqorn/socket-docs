<?php 

namespace App\Http\Controllers\Classes;

use App\Http\Controllers\Controller;
use App\Repositories\Interfaces\ClassesRepositoryInterface;

class ClassViewController extends Controller 
{
    /**
     * @var \App\Repositories\ClassesRepositoryInterface 
     */ 
    protected ClassesRepositoryInterface $classesRepository;

    /**
     * Initiate ClassViewController constructor method
     * @param \App\Repositories\ClassesRepositoryInterface $classesRepository
     * @return void
     */ 
    public function __construct(ClassesRepositoryInterface $classesRepository)
    {
        $this->classesRepository = $classesRepository;
    }

    /**
     * Display single class page by its id
     * value
     * @param int $id 
     * @return \Illuminate\Support\Facades\View 
     */ 
    public function show(int $id)
    {
        return view('class')->withClass($this->classesRepository->queryById($id));
    }
}
