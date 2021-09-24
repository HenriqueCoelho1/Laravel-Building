<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return 'Me';
    }

    public function withId($id)
    {
        return 'Me with id ' . $id;
    }

    public function show($id){

        return "Show me the id ". $id;

    }

    public function create(){
        return "This is the create method";
    }

}
