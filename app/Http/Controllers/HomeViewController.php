<?php 

namespace App\Http\Controllers;

class HomeViewController extends Controller 
{
    /**
     * Displays home page 
     * @return \Illuminate\Support\Facades\View  
     */ 
    public function __invoke()
    {
        return view('index');
    }
}
