<?php

namespace App\Http\Controllers;

use App\Helper\Helper;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class FrontendController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function index(){
        $deleted = Helper::getDeleted();

        if($deleted == false){
            return view('frontend.frontend');
        }else{
            return redirect('completed');
        }
    }

    public function delete(){
        $deleted = Helper::getDeleted();

        if($deleted == false){
            Helper::setDeleted(true);
            return view('frontend.delete');
        }else{
            return redirect('completed');
        }
    }

    public function completed(){
        return view('frontend.completed');
    }
}
