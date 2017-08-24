<?php

namespace App\Http\Controllers;

use App\People;
use App\School;
use Illuminate\Http\Request;

class PeopleController extends Controller
{
    public function student(Request $request)
    {
        $firstname = $request->get('firstname');
        $lastname = $request->get('lastname');
        $gender = $request->get('gender');
        $age = 0;
        //$age = $request->get('age');
        $school = $request->get('school');
        $class = $request->get('class');
        $job = "";
        $status = 1;
        $count = 1;
        $student = [
            'firstname' => $firstname,
            'lastname' => $lastname,
            'gender' => $gender,
            'age' => $age,
            'class' => $class,
            'school' => $school,
            'job' => $job,
            'status' => $status,
            'count' => $count
,        ];
        $tmp = People::create($student);
        return redirect('/show/'.$tmp->id);
    }
    public function teacher(Request $request)
    {
        $firstname = $request->get('firstname');
        $lastname = $request->get('lastname');
        $gender = $request->get('gender');
        $age = 0;
        //$age = $request->get('age');
        $school = $request->get('school');
        $class = $request->get('class');
        $job = "";
        $status = 2;
        $count = $request->get('count');
        $teacher = [
            'firstname' => $firstname,
            'lastname' => $lastname,
            'gender' => $gender,
            'age' => $age,
            'school' => $school,
            'class' => $class,
            'job' => $job,
            'status' => $status,
            'count' => $count
            ,        ];
        $tmp = People::create($teacher);
        return redirect('/show/'.$tmp->id);
    }
    public function people(Request $request)
    {
        $firstname = $request->get('firstname');
        $lastname = $request->get('lastname');
        $gender = $request->get('gender');
        $age = $request->get('age');
        $school = "";
        $class = "";
        $job = $request->get('job');
        $status = 3;
        $count = 1;
        $people = [
            'firstname' => $firstname,
            'lastname' => $lastname,
            'gender' => $gender,
            'age' => $age,
            'class' => $class,
            'job' => $job,
            'status' => $status,
            'count' => $count
            ,        ];
        $tmp = People::create($people);
        return redirect('/show/'.$tmp->id);
    }

    public function showqr($id)
    {
        $people = People::find($id);
        return view('showqr',['people'=>$people]);
    }
}
