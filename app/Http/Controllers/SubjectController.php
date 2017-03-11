<?php

namespace App\Http\Controllers;

use App\Subject;
use App\Posts;
use App\User;
use DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;


class SubjectController extends Controller
{

	public function showSubjectList()
	{
		return view('subject.startPage', ['subjects' => Subject::paginate(10)]);
	}
	
	
	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  Subject $id
	 * @return \Illuminate\Http\Response
	 */
	public function showOneSubject(Subject $id)
	{
		$params = clone $id;
		$userCreateSubject = $id->whoAddSubject($params);

		$postsUser = new Posts();
		$userCreatePosts = $postsUser->whoAddPosts($params);
		return view('subject.OneSubjectPage')
		->with('params', $params)
		->with('userCreateSubject',$userCreateSubject)
		->with('userCreatePosts',$userCreatePosts);
	}
	
	public function showSubjectForm($id)
	{
		return view('subject.newSubject', compact('id', $id));
	}
	
	public function addSubject(Request $request)
	{
		Subject::create($request->all());
		return redirect()->back();
	}
	
	
	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  Subject $id
	 * @return \Illuminate\Http\Response
	 */
	public function editSubject(Subject $id)
	{
		$idSubject = clone $id;
		return view('subject.editSubjectForm', compact('idSubject', $idSubject));
	}
	
	
	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  Subject $id
	 * @return \Illuminate\Http\Response
	 */
	public function deleteSubject()
	{
		
	}
	
	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  Subject $id
	 * @return \Illuminate\Http\Response
	 */
	public function updateSubject(Request $request, Subject $id)
	{
		$id->update($request->all());
		return redirect()->back();
	}
}