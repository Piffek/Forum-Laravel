<?php

namespace App\Http\Controllers;

use App\Subject;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubjectController extends Controller
{

	public function showSubjectList()
	{
		return view('subject.startPage', ['subjects' => Subject::all()]);
	}
	
	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  Subject  $id
	 * @return \Illuminate\Http\Response
	 */
	
	public function showSubjectForm($id)
	{
		return view('subject.newSubject', compact('id', $id));
	}
	
	public function addSubject(Request $request)
	{
		Subject::create($request->all());
	}
}