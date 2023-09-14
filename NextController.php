<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


function myFunction(){
    return '<h1>Hello</h1>';
}






// class NextController extends Controller
// {
//     public function show(){
//         return "<h1>Hi This is Next controler class </h1>";
//     }
// }



class NextController extends Controller
{
    public function showHome(){
        return view('welcome');
    }


    // public function showUser(){
    //     return view('user');
    // }


    public function showUser(string $id){
        return view('user',['id'=> $id]);

        
        // if variable or key is same then chose this short method
        // return view('user',compact('id'));
    }


    public function showBlog(){
        return view('blog');
    }


    

}
