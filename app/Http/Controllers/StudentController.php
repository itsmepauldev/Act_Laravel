<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;



class StudentController extends Controller
{
    public function index()
    {
//        $data['students'] = [
//     ['name' => 'Charles Reyes'],
//     ['name' => 'Pat Bauzon']
//  ];

 $data['students'] = Student::orderBy('created_at', 'desc')->paginate(15);
 $data['isAdmin'] = true;
 $data['user'] = 'JohnPaul';   
 return view('students', $data);

    }

   public function create()
   {
      return view('students.create');
   }
   public function store(Request $request)
   {
      Student::create([
         'fname' => $request['fname'],
         'lname' => $request['lname'],
         'email' => $request['email'],
         'contact' => $request['contact'],


      ]);

      return redirect()->to('students');
   }

   public function edit($id)
   {
        return "The id is $id";
   }
   public function update(Request $request, $id)
   {
      
   }
   public function show($id)
   {
      return "show id $id";
   }
   public function destroy($id)
   {
      
   }
}
