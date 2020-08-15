<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\member;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Redirect;
use Session;

class PagesController extends Controller
{

    public function home(){
        return view('pages.home');
    }
}
