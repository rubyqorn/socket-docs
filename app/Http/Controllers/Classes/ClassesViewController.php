<?php 

namespace App\Http\Controllers\Classes;

use App\Http\Controllers\Controller;
use App\Repositories\Interfaces\ClassesRepositoryInterface;

class ClassesViewController extends Controller 
{
    /**
     * @var \App\Repositories\ClassesRepositoryInterface 
     */ 
    protected ClassesRepositoryInterface $classesRepository;

    /**
     * Initiate ClassesViewController constructor method
     * @param \App\Repositories\ClassesRepositoryInterface $classesRepository
     * @return void
     */ 
    public function __construct(ClassesRepositoryInterface $classesRepository)
    {
        $this->classesRepository = $classesRepository;
    }

    /**
     * Display page with available classes
     * @return \Illuminate\Support\Facades\View
     */ 
    public function show()
    {
        return view('classes')->withClasses($this->classesRepository->queryAll());
    }
}
