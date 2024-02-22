<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Login;
use Illuminate\Support\Facades\Auth;
use App\Models\Event;
use App\Models\Subject;
use App\Models\Work;
use App\Models\Workmarks;
use App\Models\User;
use App\Models\Attendance;
use App\Models\Studymaterial;
use App\Models\Student;
class Studentcontroller extends Controller
{   
    public function loginstudent(){
        return view('login');
    }
    public function log(){
        $a=[
            'username'=>request('username'),
            'password'=>request('password'),
        ];
        
        if(auth()->attempt($a)){
            
            $b=auth()->user()->type;
            $id=auth()->user()->id;
            // return $b;
            if ($b=='admin'){
                return redirect()->route('home');
            }
            if($b=='student'){
                
                return redirect()->route('student');
            }
           if($b=='teacher') {
            // return $b;
                return redirect()->route('teacher');
            }
        }
        else{
            return 'invalid loginid';
        }
    }
    public function logout(){
        auth()->logout();
        // $b=auth()->user();
        // return 'success';
        return redirect()->route('loginstudent');

    }
    public function student(){
        return view('students');
    }
    public function studentreg(){
        return view('studentreg');
    }
    public function studentadd(){
        User::create([
            'type'=>'student',
            'username'=>request('uname'),
            'password'=>request('password'),
        ]);
        $user=User::latest()->first();
        $id= $user->id;
        Student::create([
            'name'=>request('name'),
            'date_of_birth'=>request('dob'),
            'mobile'=>request('mobile'),
            'place'=>request('place'),
            'standard'=>request('std'),
            'parent_name'=>request('pname'),
            'lid'=>$id,
        ]);
        return redirect()->route('studentreg');
    }
    public function viewevent(){
        $event=Event::all();
        return view('viewevents',compact('event'));
    }
    public function viewhwork(){
        $hwork=Work::all();
        return view('sviewhomework',compact('hwork'));
    }
    public function viewattendance(){
        $student=Attendance::where('std_id','=','1')->get();
        return view('sviewattendance',compact('student'));
    }
    public function viewstudy(){
        $study=Studymaterial::where('subject','=','english')->get();
        return view('sviewstudy',compact('study'));
    }
    public function viewstdm(){
        $study=Studymaterial::where('subject','=','maths')->get();
        return view('sviewstudy',compact('study'));
    }
    public function viewstdmat(){
        $study=Studymaterial::where('subject','=','science')->get();
        return view('sviewstudy',compact('study'));
    }
    public function hwmark(){
        // $id=auth()->user()->id;
        $student=Workmarks::where('std_id','=','1')->get();
        return view('sviewhwmarks',compact('student'));
    }
}
