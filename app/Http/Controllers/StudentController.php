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
         $request-> validate(
            [
               'fname' => 'required',
               'lname' => 'required',
               'email' => 'required|email|unique:students,email',
               'contact' => 'required',
            ],
            [
               'fname.required' => 'The First Name field is required.',
                'lname.required' => 'The Last Name field is required.',
              

            ]
         );
      Student::create([
         'fname' => $request['fname'],
         'lname' => $request['lname'],
         'email' => $request['email'],
         'contact' => $request['contact'],


      ]);

     return redirect()->to('students')->with('success',"Student has been added sucessfully");
   }

   public function edit($id)
   {
      $data['student'] = Student::find($id);

      return view('students.edit', $data);
   }
   public function update(Request $request, $id)
   {
       $student_id = $request['id'];
       $request-> validate(
            [
               'fname' => 'required',
               'lname' => 'required',
               'email' => 'required|email|unique:students,email,'. (($student_id) ? $student_id : null). ',id',
               'contact' => 'required',
            ],
            [
               'fname.required' => 'The First Name field is required.',
                'lname.required' => 'The Last Name field is required.',
              

            ]
         );
         $student = Student::find($id);
         $student->fname = $request['fname'];
         $student->lname = $request['lname'];
         $student->email = $request['email'];
         $student->contact = $request['contact'];
         $student->save();
return redirect()->to('students')->with('success',"Student has been added sucessfully");
   }
   public function show($id)
   {
      return "show id $id";
   }
   public function destroy($id)
   {
     $student= Student::find($id);
     $student -> delete();

     return redirect()->back()->with('success',"Student has been deleted sucessfully");
   }
}
