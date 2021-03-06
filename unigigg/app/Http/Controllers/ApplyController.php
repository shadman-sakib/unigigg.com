<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Model\Student\StudentApplied;
use App\Model\Student\UserInfo;
use App\Model\Student\Experience;
use App\Model\Student\ExtraCur;
use App\Model\Student\Reference;
use App\Model\Student\Skills;
use App\Model\Student\Hobbies;
use App\Model\Student\Education;
use App\Model\Student\Interest;
use App\Model\Student\User;
use App\Model\Student\FunFacts;
use App\Model\Student\Image;
use App\Model\Student\EmInfo;
use App\Model\Student\Jobs;
use Mail;
class ApplyController extends Controller
{
    //
    public function __construct()
    {
      $this->middleware('employer');
    }
    //Student applied





    public function showApplied($id)
    {
      $applied = DB::table('student_applieds')
            ->where('applied_for_job_id', $id)
            ->join('user_info', 'student_applieds.user_id', '=', 'user_info.user_id')
            ->join('jobs', 'student_applieds.applied_for_job_id', '=', 'jobs.job_id')
            ->join('users' ,'student_applieds.user_id','=','users.id')
            ->join('vprofiles', 'users.id','=', 'vprofiles.user_id')
            ->select('student_applieds.*', 'user_info.*','users.id','jobs.job_id', 'jobs.job_name','jobs.user_id','jobs.paid','vprofiles.vdourl')
            ->get();
     $uid= auth()->user()->id;
     $email = auth()->user()->email;


     return view('employer.applied', [
        'applied'=>$applied,
      ]);

    }
    public function studentemview($id)
    {
      $user = User::where('id','=',$id)->get();
      $profile = UserInfo::where('user_id','=', $id)->get();
      $skill = Skills::where('user_id','=', $id)->get();
      $education = Education::where('user_id','=', $id)->get();
      $exps = Experience::where('user_id','=', $id)->get();
      $refs = Reference::where('user_id','=', $id)->get();
      $images = Image::where('user_id','=', $id)->orderBy('created_at', 'desc')->limit(1)->get();
      return view('student.studentemview', [
        'profile'=>$profile,
        'skill'=>$skill,
        'education'=> $education,
        'exps'=> $exps,
        'refs'=> $refs,
        'images'=> $images,
        'user' => $user,



      ]);


    }
}
