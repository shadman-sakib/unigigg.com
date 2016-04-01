<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Student\EmShortlist;
use App\Model\Student\Jobs;
use App\Model\Student\UserInfo;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\Student\User;
use DB;

class ShortlistController extends Controller
{
    //
    public function __construct()
    {
      $this->middleware('employer');
    }

    public function store(Request $request)
    {

      $input = $request->all();

      EmShortlist::create($input);

      return redirect('/home');
    }

    public function shortlistview()
    {
      $shortlisted = DB::table('em_shortlists')
                    ->join('user_info', 'em_shortlists.user_id', '=', 'user_info.user_id')
                    ->join('jobs', 'em_shortlists.shortlisted_for_job_id', '=', 'jobs.job_id')
                    ->select('em_shortlists.*', 'user_info.fname','user_info.lname', 'jobs.job_name','jobs.user_id')
                    ->get();
      $id = auth()->user()->id;
      $shortlistlimit = DB::table('em_shortlists')
              ->select('em_shortlists.shortlistedby')
              ->where('shortlistedby',$id)
              ->where('finalized',1)
              ->count();


    return view('employer.shortlisted', [
        'shortlisted'=>$shortlisted,
        'shortlistlimit' => $shortlistlimit,

        ]);

    }
    public function destroy($id)
    {
      $var = EmShortlist::where('em_shortlist_id','=',$id);
      $var->delete();

      return redirect('/shortlists');

    }

    public function finalize($id)
    {
      DB::table('em_shortlists')
            ->where('em_shortlist_id', $id)
            ->update(['finalized' => 1]);


      return redirect('/shortlists');
    }
}
