<?php

namespace App\Http\Controllers;

use App\Subject;
use Session;
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
		$users = User::orderBy('created_at', 'desc')->limit(5)->get();
		$subjects = DB::table('Subjects')
		->join('users', 'Subjects.id_user', '=', 'users.id')
		->select('users.name', 'subjects.*')->orderBy('created_at', 'desc')->limit(5)->get();
		return view('subject.startPage', ['subjects' => $subjects], compact('users',$users));
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
		$this->validate($request, [
				'subject' => 'required|unique:subjects|max:255',
				'body' => 'required',
		]);
		
		Subject::create($request->all());
		Session::flash('success', 'Dodano nowy temat do rozmów');
		return redirect()->action('SubjectController@showSubjectList');
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
	public function deleteSubject(Subject $id)
	{
		$id->delete();
		Session::flash('delete', 'Usunięto temat');
		return redirect()->action('SubjectController@showSubjectList');
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
		$this->validate($request, [
				'subject' => 'required|unique:subjects|max:255',
				'body' => 'required',
		]);
		
		$id->update($request->all());
		Session::flash('success', 'Edytowano temat');
		return redirect()->action('SubjectController@showOneSubject', ['id' => $id]);
	}
}