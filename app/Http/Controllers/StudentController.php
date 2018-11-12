<?php

namespace App\Http\Controllers;
use App\Student;
use Illuminate\Http\Request;
use Auth;
use App\User;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response




     */

      public function profile ()
        
      {

           $students = Student::all();
          return view ('studentform', array('student' => Auth::user ()) );

    
         
        }




    public function index()
    {
       $students = Student::all();
       //return $students;

       return view('summary', compact('students'));  
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
          return view ('studentform');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student = new Student;
         
           $student->first_name = $request->first_name;
           $student->Last_name = $request->Last_name;
           $student->Nationality = $request->Nationality;
           $student->Address = $request->Address;
           $student->City = $request->City;
           $student->State =$request->State;
           $student->Post_code = $request->Post_code;
           $student->Country = $request->Country;
           $student->Guardians_name = $request->Guardians_name;
           $student->Guardians_phonenumber = $request->Guardians_phonenumber;
           $student->Guardians_relationship = $request->Guardians_relationship;
           $student->Guardians_occupation = $request->Guardians_occupation;
           $student->Last_school_attended = $request->Last_school_attended;
           $student->Reason_for_leaving_last_school = $request->Reason_for_leaving_last_school;
           $student->Last_class_attended = $request->Last_class_attended;
           $student->Admission_class_sought = $request->Admission_class_sought;

           $student->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
