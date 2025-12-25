<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    //
    private $myvalue;
    protected $myvalue2;
    public $myval = "";

    function __construct(){

    }

    function index(){
        return view('myform.html101');
    }

    function info(){
        return view('myview.info');
    }

    function calculate(Request $req){
        // echo $req->input('mynumber');
        $data['num'] = $req->input('mynumber');
        return view('myview.calculate', $data);

    }

    function store(Request $req){
        $data['fname'] = $req->input('fname');
        $data['lname'] = $req->input('lname');
        $data['birthday'] = $req->input('birthday');
        $data['age'] = $req->input('age');
        $data['gender'] = $req->input('gender');
        $data['file'] = $req->input('file');
        $data['address'] = $req->input('address');
        $data['color'] = $req->input('color');
        $data['song'] = $req->input('song');
        $data['agree'] = $req->input('agree');
        return view('myform.html101_view', $data);

    }
}
