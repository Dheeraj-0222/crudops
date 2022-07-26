<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;

class Studentcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view('home',['students'=>$students]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $student= new Student;
        $student->name = $request->name;
        $student->city = $request->city;
        $student->marks = $request->marks;
        $student->save();
        return redirect(route('index'))->with('status','Student Added!!!!');
    }

    

    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $student = Student::find($id);
       return view ('editform',['student'=>$student])->with('status','Student Edited!!!!');
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
        $student =Student::find($id);
        $student->name = $request->name;
        $student->city = $request->city;
        $student->marks = $request->marks;
        $student->save();
        return redirect(route('index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Student::destroy($id);
        return redirect(route('index'))->with('status','Student Deleted!!!!');
    }
}
