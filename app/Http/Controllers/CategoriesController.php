<?php
#add category
namespace App\Http\Controllers;

use App\Categories;
use DB;
use App\Subject;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  Categories  $id
	 * @return \Illuminate\Http\Response
	 */

	public function ShowCategory($id)
	{
		$categoryInSubject = DB::table('Subjects')
		->join('users', 'Subjects.id_user', '=', 'users.id')
		->select('users.name', 'subjects.*')
		->where('id_categories', $id)
		->paginate(5);
		$newId = $id;
		return view('category.categoryPage',compact('categoryInSubject',$categoryInSubject), compact('newId', $newId));
	}
	

}