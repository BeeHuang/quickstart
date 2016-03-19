<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Response;
use Illuminate\Support\Facades\Input;

class HttpController extends Controller
{
    // public function __construct(TaskRepository $tasks)
 //    {
 //        $this->tasks = $tasks;
 //    }

    public function index(Request $request){
        return view('http_input');
        echo(var_dump($request->all()));
    }

    public function get(Request $request){
        echo $request->get('user_token');
        // echo (Response::make( ['status' => 'success'],200));
        // dd(Input::all());
        return Response::make( ['status' => 'success'],200);
    }

    public function post(Request $request){
        // echo $request->get('user_token');
        // echo (Response::make( ['status' => 'success'],200));
        return Response::make( ['status' => 'success'],200);
    }
}
