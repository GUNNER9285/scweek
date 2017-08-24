<?php

namespace App\Http\Controllers;

use App\People;
use App\People_Room;
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
    public function showmember()
    {
        $peoples = People::all();
        return view('showmember',['peoples'=>$peoples]);
    }
    public function showroom($id)
    {
        $p_room = People_Room::where('id_room','=',$id)->get();
        $peoples = [];
        foreach ($p_room as $p){
            $people = People::where('id','=',$p->id_people)->first();
            array_push($peoples, $people);
        }
        return view('showp_room',['peoples'=>$peoples, 'id_room'=>$id]);
    }
    public function checkin($id)
    {
        return view('selectroom',['id_people'=>$id]);
    }
    public function addroom($id, $idr)
    {
        $people_room = [
            'id_people' => $id,
            'id_room' => $idr
        ];
        People_Room::create($people_room);
        return view('success');
    }

    public function total($day)
    {
        if($day == 0){
            $allroom = People::all()->count();
            $room1 = People_Room::where('id_room','=',1)->count();
            $room2 = People_Room::where('id_room','=',2)->count();
            $room3 = People_Room::where('id_room','=',3)->count();
        }
        else{
            $allroom = People::whereDate('created_at', '=', date('2017-08-'.$day))->count();
            $room1 = People_Room::where('id_room','=',1)
                ->whereDate('created_at', '=', date('2017-08-'.$day))
                ->count();
            $room2 = People_Room::where('id_room','=',2)
                ->whereDate('created_at', '=', date('2017-08-'.$day))
                ->count();
            $room3 = People_Room::where('id_room','=',3)
                ->whereDate('created_at', '=', date('2017-08-'.$day))
                ->count();
        }
        $total = [
            'total_room' => $allroom,
            'total_room1' => $room1,
            'total_room2' => $room2,
            'total_room3' => $room3,
        ];
        return $total;
    }
}
