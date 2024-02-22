<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Student;
use App\Models\User;
use App\Models\Subject;
use App\Models\Classteacher;
use App\Models\Timetable;
use App\Models\Notification;
use App\Models\Work;
use App\Models\Mark;
use App\Models\Attendance;
use App\Models\Event;
use App\Models\Studymaterial;
use App\Models\Workmarks;
class Teachercontroller extends Controller
{
    public function teacher(){
        return view('teachers');
    }
    public function viewfstudents(){
        $student=Student::where('standard','=','1')->get();
        // return $student;
         return view('tchrviewfstd',compact('student'));
    }
    public function viewsstudents(){
        $student=Student::where('standard','=','2')->get();
        return view('tchrviewfstd',compact('student'));
    }
    public function viewtstudents(){
        $student=Student::where('standard','=','3')->get();
        return view('tchrviewfstd',compact('student'));
    }
    public function viewfthstudents(){
        $student=Student::where('standard','=','4')->get();
         return view('tchrviewfstd',compact('student'));
    }
    public function viewfirsttt(){
        $timetable=DB::table('teachers')->join('timetables','teachers.id','=','timetables.t1')->get();
        // return $timetable;
        // $timetable=Timetable::where('standard','=','1')->get();
        return view('tviewtt',compact('timetable'));
    }
    public function viewscndtt(){
        $timetable=Timetable::where('standard','=','2')->get();
        return view('tviewtt2',compact('timetable'));
    }
    public function viewthrdtt(){
        $timetable=Timetable::where('standard','=','3')->get();
        return view('tviewtt3',compact('timetable'));
    }
    public function viewfthtt(){
        $timetable=Timetable::where('standard','=','4')->get();
        return view('tviewtt4',compact('timetable'));
    }
    public function addmarks($id){
        return view('addmarks',compact('id'));
    }
    public function addmark(){
        if(request()->hasfile('marklist')){
            $extension=request('marklist')->extension();
            $filenew=rand().'.'.$extension;
            request('marklist')->storeAs('image',$filenew);
        }
        else{
            return 'no file exist';
        }
        Mark::create([
            'std_id'=>request('id'),
            's1'=>request('s1'),
            'm1'=>request('m1'),
            's2'=>request('s2'),
            'm2'=>request('m2'),
            's3'=>request('s3'),
            'm3'=>request('m3'),
            's4'=>request('s4'),
            'm4'=>request('m4'),
            'marklist'=> $filenew,
        ]);
        return redirect()->route('teacher');
    }
    public function viewnotifi(){
        $notifi=Notification::all();
        return view('viewnotifi',compact('notifi'));
    }
    public function addhomework(){
        return view('addhomework');
    }
    public function savehomework(){
        Work::create([
            'standard'=>request('std'),
            'subject'=>request('subject'),
            'topic'=>request('topic'),
            'sub_date'=>request('subdate'),
        ]);
        return redirect()->route('addhomework');
    }
    public function hwdetails(){
        $student=Work::where('standard','=','1')->get();
        return view('viewhomework',compact('student')); 
    }
    public function hwmarks($id){
        // $work=Work::where('standard','=','1')->get();
        $student=Student::where('standard','=','1')->get();
        return view('homeworkmark',compact('student','id'));
    }
    public function addhwmarks(){
        Workmarks::create([
        'hw_id'=>request('idd'),
        'std_id'=>request('id'),
        'marks'=>request('mark'),
        ]);
        return redirect()->route('teacher');
    }
    public function shwdetails(){
        $student=Work::where('standard','=','2')->get();
        return view('viewhomework2',compact('student')); 
    }
    public function shwmarks($id){
        $student=Student::where('standard','=','2')->get();
        return view('homeworkmark2',compact('student','id'));
    }
    public function saddhwmarks(){
        Workmarks::create([
        'hw_id'=>request('idd'),
        'std_id'=>request('id'),
        'marks'=>request('mark'),
        ]);
        return redirect()->route('teacher');
    }
    public function thwdetails(){
        $student=Work::where('standard','=','3')->get();
        return view('viewhomework3',compact('student')); 
    }
    public function thwmarks($id){
        $student=Student::where('standard','=','3')->get();
        return view('homeworkmark3',compact('student','id'));
    }
    public function taddhwmarks(){
        Workmarks::create([
        'hw_id'=>request('idd'),
        'std_id'=>request('id'),
        'marks'=>request('mark'),
        ]);
        return redirect()->route('teacher');
    }
    public function fhwdetails(){
        $student=Work::where('standard','=','4')->get();
        return view('viewhomework4',compact('student')); 
    }
    public function fhwmarks($id){
        $student=Student::where('standard','=','4')->get();
        return view('homeworkmark4',compact('student','id'));
    }
    public function faddhwmarks(){
        Workmarks::create([
        'hw_id'=>request('idd'),
        'std_id'=>request('id'),
        'marks'=>request('mark'),
        ]);
        return redirect()->route('teacher');
    }
    public function addstudy(){
        return view('addstudy');
    }
    public function savestudy(){
       
        if(request()->hasfile('image')){
            $extension=request('image')->extension();
            $filenew=rand().'.'.$extension;
            request('image')->storeAs('image',$filenew);
        }
        else{
            return 'no file exist';
        }
        Studymaterial::create([
            'subject'=>request('subject'),
            'standard'=>request('std'),
            'file'=> $filenew,
        ]);
        return redirect()->route('teacher');
    }
    public function firstatt(){
        $student=Student::where('standard','=','1')->get();
         return view('fattendance',compact('student'));
    }
    public function savepresent($id){
        Attendance::create([
            'standard'=>'1',
            'std_id'=>$id,
            'attendance'=>'present',
        ]);
        return redirect()->route('firstatt');
    }
    public function saveabsent($id){
        Attendance::create([
            'standard'=>'1',
            'std_id'=>$id,
            'attendance'=>'absent',
        ]);
        return redirect()->route('firstatt');
    }
    public function secondatt(){
        $student=Student::where('standard','=','2')->get();
         return view('sattendance',compact('student'));
    }
    public function spresent($id){
        // return $id;
        Attendance::create([
            'standard'=>'2',
            'std_id'=>$id,
            'attendance'=>'present',
        ]);
        return redirect()->route('secondatt');
    }
    public function ssaveabsent($id){
        Attendance::create([
            'standard'=>'2',
            'std_id'=>$id,
            'attendance'=>'absent',
        ]);
        return redirect()->route('secondatt');
    }
    public function thirdatt(){
        $student=Student::where('standard','=','3')->get();
         return view('tattendance',compact('student'));
    }
    public function tsavepresent($id){
        Attendance::create([
            'standard'=>'3',
            'std_id'=>$id,
            'attendance'=>'present',
        ]);
        return redirect()->route('thirdatt');
    }
    public function tsaveabsent($id){
        Attendance::create([
            'standard'=>'3',
            'std_id'=>$id,
            'attendance'=>'absent',
        ]);
        return redirect()->route('thirdatt');
    }
    public function forthatt(){
        $student=Student::where('standard','=','4')->get();
         return view('frthattendance',compact('student'));
    }
    public function fsavepresent($id){
        Attendance::create([
            'standard'=>'4',
            'std_id'=>$id,
            'attendance'=>'present',
        ]);
        return redirect()->route('forthatt');
    }
    public function fsaveabsent($id){
        Attendance::create([
            'standard'=>'4',
            'std_id'=>$id,
            'attendance'=>'absent',
        ]);
        return redirect()->route('forthatt');
    }
    public function addevent(){
        return view('addevents');
    }
    public function saveevent(){
        Event::create([
            'title'=>request('title'),
            'event'=>request('event'),
        ]);
        return redirect()->route('teacher');
    }
}
