<?php

namespace App\Http\Controllers;

use App\Posts;
use Session;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostsController extends Controller
{

	public function newPost(Request $request)
	{		
		$this->validate($request, [
				'text' => 'required',
		]);
		
		Posts::create($request->all());
		Session::flash('success', 'Dodano nowy post');
		return redirect()->back();
	}
	
	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  Posts  $id
	 * @return \Illuminate\Http\Response
	 */
	public function deletePost(Posts $id)
	{
		$id->delete();
		Session::flash('success', 'Usunięto post');
		return redirect()->back();
	}
	
	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  Posts  $id
	 * @return \Illuminate\Http\Response
	 */
	public function editPost(Posts $id)
	{
		$postId = clone $id;
		return view('post.editPostForm', compact('postId', $postId));
	}
	
	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  Posts  $id
	 * @return \Illuminate\Http\Response
	 */
	public function updatePost(Request $request, Posts $id)
	{
		$id->update($request->all());
		Session::flash('success', 'Edytowano post');
		return redirect()->back();
	}

}