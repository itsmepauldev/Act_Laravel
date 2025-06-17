<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
     public function index(){
         $greetings = "Paul";
    return view('profile', ['greetings' => $greetings]);
     }

      public function create()
   {
return "hi profile create";
   }
   public function store(Request $request)
   {
      
   }
   public function edit($id)
   {
      
   }
   public function update(Request $request, $id)
   {
      
   }
   public function show($id)
   {
      
   }
   public function destroy($id)
   {
      
   }
}
