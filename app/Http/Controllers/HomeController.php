<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use App\Admin;
use App\Hospital;
use App\Donetes;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    //    $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    
    public function test()
    {
        $members = Donetes::all();
        return view('admin' , ['members' => $members] );
    }
    public function create(){
        return view('inserte');
    }
    public function store(Request $request){
       Hospital::create([
            'email'=> $request->email,
            'password'=> $request->password,
            'name'=> $request->name,
            'adress'=> $request->adress,
            'type'=> $request->type,
        ]) ;
        return 'saved successfuly';
       }
       public function getHospitalDoctor(){
         $hospital=User::find(1);
         return  $hospital;
    }
    public function createpost(){
        return view('post');
    }
    public function storepost(Request $request){
        Post::create([
             'body'=> $request->body,
             'title'=> $request->title,
            
         ]) ;
         return 'saved successfuly';
        }
 
}

