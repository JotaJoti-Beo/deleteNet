<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class FrontendController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function index(){
        return view('frontend.frontend');
    }

    public function delete(){
        return view('frontend.delete');
    }

    public function completed(){
        return view('frontend.completed');
    }
}
