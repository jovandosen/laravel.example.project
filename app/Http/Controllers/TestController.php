<?php

namespace Development\Http\Controllers;

use Illuminate\Http\Request;
use Development\Http\Requests\TestRequest;
use Development\PostModel;

class TestController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}

    public function test()
    {
    	return view('test');
    }

    public function getData(TestRequest $request)
    {
    	$title = $request->input('title');
    	$content = $request->input('content');
    	$file = $request->file('file');

    	if( $request->hasFile('file') ){
    		if( $request->file('file')->isValid() ){
    			$path = $request->file->path();
				$extension = $request->file->extension();
				$path = $request->file->store('images');
				$fileName = $request->file('file')->getClientOriginalName();
    		}
    	}

    	$post = PostModel::create([
    		'title' => $title,
    		'content' => $content,
    		'file' => $fileName
    	]);

    	if( $post ){
    		return redirect()->back();
    	}

    }
}
