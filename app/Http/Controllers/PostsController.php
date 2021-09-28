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

    public function contact(){
        $people = ['Edwin', 'Claypson', 'Jeremias', 'Josh'];

        return view('contact', compact('people'));

    }

    public function show_post($id, $first_name, $second_name){
        // return view('post')->with('id', $id);

        return view('post', compact('id', 'first_name', 'second_name'));
    }

}
