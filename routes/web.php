 <?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

 Route::get('/home','App\Http\Controllers\Homecontroller@home')->name('home');
Route::get('/add','App\Http\Controllers\Homecontroller@addteachers')->name('addtchrs');
Route::post('/add_save','App\Http\Controllers\Homecontroller@saveadd')->name('add');
Route::get('/add_tchrs','App\Http\Controllers\Homecontroller@addteachers')->name('addtchrs');
Route::get('/view_tchrs','App\Http\Controllers\Homecontroller@viewteachers')->name('viewtchrs');
Route::get('/delete_tchrs/{tid}','App\Http\Controllers\Homecontroller@deleteteachers')->name('deleteteachers');

Route::get('/block/{tid}','App\Http\Controllers\Homecontroller@blocktchr')->name('blocktchr');
Route::get('/unblock/{tid}','App\Http\Controllers\Homecontroller@unblocktchr')->name('unblocktchr');

Route::get('/view_stdnts','App\Http\Controllers\Homecontroller@viewstudents')->name('viewstudents');
Route::get('/approve/{id}','App\Http\Controllers\Homecontroller@approvestnt')->name('approvestnt');
Route::get('/delete_stnts/{id}','App\Http\Controllers\Homecontroller@deletestudents')->name('deletestudents');
Route::get('/fstd','App\Http\Controllers\Homecontroller@firststd')->name('firststd');
Route::post('/fstd_save','App\Http\Controllers\Homecontroller@fstdsave')->name('fstdsave');
Route::get('/sstd','App\Http\Controllers\Homecontroller@secondstd')->name('secondstd');
Route::post('/sstd_save','App\Http\Controllers\Homecontroller@sstdsave')->name('sstdsave');
Route::get('/tstd','App\Http\Controllers\Homecontroller@thirdstd')->name('thirdstd');
Route::post('/thstd_save','App\Http\Controllers\Homecontroller@tstdsave')->name('tstdsave');
Route::get('/frstd','App\Http\Controllers\Homecontroller@fourthstd')->name('fourthstd');
Route::post('/frthstd_save','App\Http\Controllers\Homecontroller@frthstdsave')->name('frthstdsave');
Route::get('/clsstchr','App\Http\Controllers\Homecontroller@classtchr')->name('classtchr');
Route::post('/clsstchr_add','App\Http\Controllers\Homecontroller@clsstchradd')->name('clsstchradd');

Route::get('/subject','App\Http\Controllers\Homecontroller@subject')->name('subject');
Route::post('/add_subject','App\Http\Controllers\Homecontroller@addsubject')->name('addsubject');

Route::get('/view_clsstchr','App\Http\Controllers\Homecontroller@viewclsstchr')->name('viewclsstchr');
Route::get('/edit_clsstchr/{id}','App\Http\Controllers\Homecontroller@editclsstchr')->name('editclsstchr');
Route::post('/editclssview','App\Http\Controllers\Homecontroller@editclssview')->name('editclssview');
Route::get('/delete_clsstchr/{id}','App\Http\Controllers\Homecontroller@deleteclsstchr')->name('deleteclsstchr');
Route::get('/view_timetable','App\Http\Controllers\Homecontroller@viewftt')->name('viewftt');
Route::get('/view_stimetable','App\Http\Controllers\Homecontroller@viewstt')->name('viewstt');
Route::get('/view_ttimetable','App\Http\Controllers\Homecontroller@viewtrdtt')->name('viewtrdtt');
Route::get('/view_frthtimetable','App\Http\Controllers\Homecontroller@viewfrthtt')->name('viewfrthtt');
Route::get('/edit_timetable/{id}','App\Http\Controllers\Homecontroller@edittimetable')->name('edittimetable');
Route::post('/edit_tt','App\Http\Controllers\Homecontroller@tteditsave')->name('tteditsave');
Route::get('/delete_tt/{id}','App\Http\Controllers\Homecontroller@deletett')->name('deletett');
Route::get('/add_n','App\Http\Controllers\Homecontroller@addnotifi')->name('addnotifi');
Route::post('/notifi_add','App\Http\Controllers\Homecontroller@savenotifi')->name('savenotifi');




Route::get('/teacher','App\Http\Controllers\Teachercontroller@teacher')->name('teacher');
Route::get('/view_fstd','App\Http\Controllers\Teachercontroller@viewfstudents')->name('viewfstudents');
Route::get('/view_sstd','App\Http\Controllers\Teachercontroller@viewsstudents')->name('viewsstudents');
Route::get('/view_tstd','App\Http\Controllers\Teachercontroller@viewtstudents')->name('viewtstudents');
Route::get('/view_fthstd','App\Http\Controllers\Teachercontroller@viewfthstudents')->name('viewfthstudents');
Route::get('/view_ft','App\Http\Controllers\Teachercontroller@viewfirsttt')->name('viewfirsttt');
Route::get('/view_st','App\Http\Controllers\Teachercontroller@viewscndtt')->name('viewscndtt');
Route::get('/view_tt','App\Http\Controllers\Teachercontroller@viewthrdtt')->name('viewthrdtt');
Route::get('/view_ftht','App\Http\Controllers\Teachercontroller@viewfthtt')->name('viewfthtt');
Route::get('/view_notifi','App\Http\Controllers\Teachercontroller@viewnotifi')->name('viewnotifi');

Route::get('/add_homework','App\Http\Controllers\Teachercontroller@addhomework')->name('addhomework');
Route::post('/save_homework','App\Http\Controllers\Teachercontroller@savehomework')->name('savehomework');
Route::get('/hw_details','App\Http\Controllers\Teachercontroller@hwdetails')->name('hwdetails');
Route::get('/hw_marks/{id}','App\Http\Controllers\Teachercontroller@hwmarks')->name('hwmarks');
Route::post('/addhw_marks','App\Http\Controllers\Teachercontroller@addhwmarks')->name('addhwmarks');

Route::get('/shw_details','App\Http\Controllers\Teachercontroller@shwdetails')->name('shwdetails');
Route::get('/shw_marks/{id}','App\Http\Controllers\Teachercontroller@shwmarks')->name('shwmarks');
Route::post('/addhw_smarks','App\Http\Controllers\Teachercontroller@saddhwmarks')->name('saddhwmarks');

Route::get('/thw_details','App\Http\Controllers\Teachercontroller@thwdetails')->name('thwdetails');
Route::get('/thw_marks/{id}','App\Http\Controllers\Teachercontroller@thwmarks')->name('thwmarks');
Route::post('/addhw_tmarks','App\Http\Controllers\Teachercontroller@taddhwmarks')->name('taddhwmarks');

Route::get('/fhw_details','App\Http\Controllers\Teachercontroller@fhwdetails')->name('fhwdetails');
Route::get('/fhw_marks/{id}','App\Http\Controllers\Teachercontroller@fhwmarks')->name('fhwmarks');
Route::post('/addhw_fmarks','App\Http\Controllers\Teachercontroller@faddhwmarks')->name('faddhwmarks');


Route::get('/add_marks/{id}','App\Http\Controllers\Teachercontroller@addmarks')->name('addmarks');
Route::post('/add_mark','App\Http\Controllers\Teachercontroller@addmark')->name('addmark');
Route::get('/addstudy','App\Http\Controllers\Teachercontroller@addstudy')->name('addstudy');
Route::post('/study_save','App\Http\Controllers\Teachercontroller@savestudy')->name('savestudy');

Route::get('/fattndc','App\Http\Controllers\Teachercontroller@firstatt')->name('firstatt');
Route::get('/first_attndc/{id}','App\Http\Controllers\Teachercontroller@savepresent')->name('savepresent');
Route::get('/ab_attndc/{id}','App\Http\Controllers\Teachercontroller@saveabsent')->name('saveabsent');

Route::get('/sattndc','App\Http\Controllers\Teachercontroller@secondatt')->name('secondatt');
Route::get('/second_attndc/{id}','App\Http\Controllers\Teachercontroller@spresent')->name('spresent');
Route::get('/scnd_attndc/{id}','App\Http\Controllers\Teachercontroller@ssaveabsent')->name('ssaveabsent');

Route::get('/tattndc','App\Http\Controllers\Teachercontroller@thirdatt')->name('thirdatt');
Route::get('/third_attndc/{id}','App\Http\Controllers\Teachercontroller@tsavepresent')->name('tsavepresent');
Route::get('/t_attndc/{id}','App\Http\Controllers\Teachercontroller@tsaveabsent')->name('tsaveabsent');

Route::get('/frth_attndc','App\Http\Controllers\Teachercontroller@forthatt')->name('forthatt');
Route::get('/fourth_attndc/{id}','App\Http\Controllers\Teachercontroller@fsavepresent')->name('fsavepresent');
Route::get('/f_attndc/{id}','App\Http\Controllers\Teachercontroller@fsaveabsent')->name('fsaveabsent');

Route::get('/add_event','App\Http\Controllers\Teachercontroller@addevent')->name('addevent');
Route::post('/save_event','App\Http\Controllers\Teachercontroller@saveevent')->name('saveevent');



Route::get('/','App\Http\Controllers\Studentcontroller@loginstudent')->name('loginstudent');
Route::post('/login','App\Http\Controllers\Studentcontroller@log')->name('log');
Route::get('/logout','App\Http\Controllers\Studentcontroller@logout')->name('logout');

Route::get('/student','App\Http\Controllers\Studentcontroller@student')->name('student');
Route::get('/studentreg','App\Http\Controllers\Studentcontroller@studentreg')->name('studentreg');
Route::post('/studentadd','App\Http\Controllers\Studentcontroller@studentadd')->name('studentadd');

Route::get('/view_event','App\Http\Controllers\Studentcontroller@viewevent')->name('viewevent');
Route::get('/view_homework','App\Http\Controllers\Studentcontroller@viewhwork')->name('viewhwork');
Route::get('/view_homeworkmark','App\Http\Controllers\Studentcontroller@hwmark')->name('hwmark');

Route::get('/view_att','App\Http\Controllers\Studentcontroller@viewattendance')->name('viewattendance');
Route::get('/view_study','App\Http\Controllers\Studentcontroller@viewstudy')->name('viewstudy');
Route::get('/view_study2','App\Http\Controllers\Studentcontroller@viewstdm')->name('viewstdm');
Route::get('/view_study3','App\Http\Controllers\Studentcontroller@viewstdmat')->name('viewstdmat');