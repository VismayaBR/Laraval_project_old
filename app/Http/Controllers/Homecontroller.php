<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\User;
use App\Models\Subject;
use App\Models\Student;
use App\Models\Classteacher;
use App\Models\Timetable;
use App\Models\Notification;
class Homecontroller extends Controller
{
    public function home(){
        return view('welcome');
    }
    public function addteachers(){
        return view('addteachers');
    }
    public function saveadd(){
        User::create([
            'type'=>'teacher',
            'username'=>request('uname'),
            'password'=>request('password'),
        ]);
        $teach=User::latest()->first();
        $id= $teach->id;
        if(request()->hasfile('image')){
            $extension=request('image')->extension();
            $filenew=rand().'.'.$extension;
            request('image')->storeAs('image',$filenew);
        }
        else{
            return 'no file exist';
        }
        Teacher::create([
            't_name'=>request('name'),
            'email'=>request('email'),
            't_mobile'=>request('mobile'),
            't_place'=>request('place'),
            'qualification'=>request('qualification'),
            'image'=> $filenew,
            'lid'=>$id,
        ]);
        return redirect()->route('viewtchrs');
    }
    public function viewteachers(){
        $teacher=Teacher::all();
        return view('viewteachers',compact('teacher'));
    }
    public function deleteteachers($tid){
        // $data=Teacher::where('tid',decrypt($tid))->get(); 
       $data = Teacher::find(decrypt($tid));
    //    return $data;
       $data->delete();
        // $data =  Teacher::find(decrypt($tid));
        // return $data;
        //  $data->delete();
         return redirect()->route('viewtchrs');
    }
    public function blocktchr($tid){
        $query=Teacher::find(decrypt($tid));
        $query->update([
            'block'=>'1',
        ]);
          return redirect()->route('viewtchrs');
    }
    public function unblocktchr($tid){
        $query=Teacher::find(decrypt($tid));
        $query->update([
            'block'=>'0',
        ]);
          return redirect()->route('viewtchrs');
    }
    public function viewstudents(){
        $student=Student::all();
        return view('viewstudents',compact('student'));
    }
    public function approvestnt($id){
        $query=Student::find(decrypt($id));
        $query->update([
            'status'=>'1',
        ]);
          return redirect()->route('viewstudents');
    }
    public function deletestudents($id){ 
       $data = Student::find(decrypt($id));
       $data->delete();
         return redirect()->route('viewstudents');
    }
    public function firststd(){
        $teacher=Teacher::all();
        // return $teacher;
        return view('frststd',compact('teacher'));
    }
    public function fstdsave(){
        Timetable::create([
            'standard'=>'1',
            'day'=>request('day'),
            's1'=>request('fp'),
            't1'=>request('ft'),
            's2'=>request('sp'),
            't2'=>request('st'),
            's3'=>request('tp'),
            't3'=>request('tt'),
            's4'=>request('fthp'),
            't4'=>request('ftht'),
            // 'subject_id'=>request('fp'),
        ]);
        return redirect()->route('viewftt');
    }
    public function viewftt(){
        $timetable=Timetable::where('standard','=','1')->where('day','=','tuesday')->get();
        //  $timetable=DB::table('timetables')->join('teachers','teachers.id','=','timetables.id')->where('timetables.standard','=','1')->get();
        //  return $timetable;
         $t1=$timetable[0]->t1;
         $t2=$timetable[0]->t2;
         $t3=$timetable[0]->t3;
         $t4=$timetable[0]->t4;
        //  return $t;
         $tname=Teacher::where('id','=',$t1)->get();
        $name1=$tname[0]->t_name;
        $tname=Teacher::where('id','=',$t2)->get();
        $name2=$tname[0]->t_name;
        $tname=Teacher::where('id','=',$t3)->get();
        $name3=$tname[0]->t_name;
        $tname=Teacher::where('id','=',$t4)->get();
        $name4=$tname[0]->t_name;
        // return $name4;
        return view('viewtimetable',compact('timetable','name1','name2','name3','name4'));
    }
    public function viewstt(){
        $timetable=Timetable::where('standard','=','2')->get();
        return view('viewtt2',compact('timetable'));
    }
    public function viewtrdtt(){
        $timetable=Timetable::where('standard','=','3')->get();
        return view('viewtt3',compact('timetable'));
    }
    public function viewfrthtt(){
        $timetable=Timetable::where('standard','=','4')->get();
        return view('viewtt4',compact('timetable'));
    }
    public function secondstd(){
        $teacher=Teacher::all();
        return view('scndstd',compact('teacher')); 
    }
    public function sstdsave(){
        Timetable::create([
            'standard'=>'2',
            'day'=>request('day'),
            'fp'=>request('fp'),
            't1'=>request('ft'),
            'sp'=>request('sp'),
            't2'=>request('st'),
            'tp'=>request('tp'),
            't3'=>request('tt'),
            'fthp'=>request('fthp'),
            't4'=>request('ftht'),
        ]);
        return redirect()->route('viewstt');
    }
    public function thirdstd(){
        $teacher=Teacher::all();
        return view('thirdstd',compact('teacher')); 
    }
    public function tstdsave(){
        Timetable::create([
            'standard'=>'3',
            'day'=>request('day'),
            'fp'=>request('fp'),
            't1'=>request('ft'),
            'sp'=>request('sp'),
            't2'=>request('st'),
            'tp'=>request('tp'),
            't3'=>request('tt'),
            'fthp'=>request('fthp'),
            't4'=>request('ftht'),
        ]);
        return redirect()->route('viewthrdtt');
    }
    public function fourthstd(){
        $teacher=Teacher::all();
        return view('forthstd',compact('teacher'));
    }
    public function frthstdsave(){
        Timetable::create([
            'standard'=>'4',
            'day'=>request('day'),
            'fp'=>request('fp'),
            't1'=>request('ft'),
            'sp'=>request('sp'),
            't2'=>request('st'),
            'tp'=>request('tp'),
            't3'=>request('tt'),
            'fthp'=>request('fthp'),
            't4'=>request('ftht'),
        ]);
        return redirect()->route('viewfrthtt');
    }
    public function edittimetable($id){
      $timetable=Timetable::find($id);
      return view('edittimetable',compact('timetable'));
    }
    public function tteditsave(){
        $query=Timetable::find(request('id'));
        $query->Update([ 
            'day'=>request('day'),
            'fp'=>request('fp'),
            't1'=>request('ft'),
            'sp'=>request('sp'),
            't2'=>request('st'),
            'tp'=>request('tp'),
            't3'=>request('tt'),
            'fthp'=>request('fthp'),
            't4'=>request('ftht'),
        ]);
        return redirect()->route('viewftt');
    }
    public function deletett($id){ 
        $data = Timetable::find($id);
        $data->delete();
          return redirect()->route('viewftt');
     }
    public function classtchr(){
        $teacher=Teacher::all();
        return view('fclsstchr',compact('teacher'));
    }
    public function clsstchradd(){
        Classteacher::create([
            'standard'=>request('std'),
            'teacher'=>request('teacher'),
        ]);
        return redirect()->route('viewclsstchr');
    }
    public function viewclsstchr(){
        $class=Classteacher::all();
        return view('viewclsstchr',compact('class'));
    }
    public function editclsstchr($id){
        $data=Classteacher::find(decrypt($id));
        return view('editclsstchr',compact('data'));
    }
    public function editclssview(){
        $data=Classteacher::find(request('id'));
       $data->Update([
         'standard'=>request('std'),
         'teacher'=>request('tchr'),
       ]);
       return redirect()->route('viewclsstchr');
    }
    public function deleteclsstchr($id){ 
        $data = Classteacher::find(decrypt($id));
        $data->delete();
          return redirect()->route('viewclsstchr');
     }
     public function addnotifi(){
        return view('addnotifi');
    }
    public function savenotifi(){
        Notification::create([
            'title'=>request('title'),
            'content'=>request('content'),
        ]);
        return redirect()->route('addnotifi');
    }

    public function subject(){
        $teacher=Teacher::all();
        return view('addsubjects',compact('teacher'));
    }
    public function addsubject(){
        Subject::create([
            'subject'=>request('subject'),
            'tchr_id'=>request('teacher'),
        ]);
        return redirect()->route('home');
    }
    
}
