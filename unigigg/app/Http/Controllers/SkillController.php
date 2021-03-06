<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Student\Skills;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class SkillController extends Controller
{
  //
  public function __construct()
  {
    $this->middleware('auth');
  }
  public function index(Request $request)
  {
    $uid = auth()->user()->id;
    $skill = Skills::where('user_id', $uid)->orderBy('created_at', 'desc')->get();

    return view('student.skill', [
      'skill'=>$skill,
    ]);
  }

  public function store(Request $request)
  {
    $this->validate($request, [
      'skill_name' => 'required|max:50',
      'skill_experience' => 'required|max:2|min:1',
      'skill_proof' => 'required|url',


    ]);

    $request->user()->skills()->create([
      'skill_name' => $request->skill_name,
      'skill_level' => $request->skill_level,
      'skill_experience' => $request->skill_experience,
      'skill_proof' => $request->skill_proof,
    ]);
    notify()->flash('Added Successfully!', 'success', [
      'timer' => 2000,

    ]);


    return redirect('/skill');

  }
  public function destroy($id)
  {
    $skill = Skills::where('skill_id','=',$id);
    $skill->delete();
    notify()->flash('Deleted Successfully!', 'success', [
      'timer' => 2000,

    ]);

    return redirect('/home');

  }



}
