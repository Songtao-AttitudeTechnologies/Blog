<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class IndexController extends CommonController
{
    //
    public function index(){
        return view('admin.index');
    }

    public function info(){
        return view('admin.info');
    }

    public function add(){
        return view('admin.add');
    }

    public function listPage(){
        return view('admin.list');
    }

    public function tab(){
        return view('admin.tab');
    }

    public function img(){
        return view('admin.img');
    }

    public function element(){
        return view('admin.element');
    }

    public function pass(){
        return view('admin.pass');
    }
}
