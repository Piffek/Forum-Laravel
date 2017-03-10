<?php

namespace App\Http\Controllers;

use App\Posts;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostsController extends Controller
{

	public function newPost(Request $request)
	{
		Posts::create($request->all());
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
		return redirect()->back();
	}

}