<?php namespace App\Http\Controllers\App;

use Illuminate\Http\Request;

class ImageController
{
	public function create()
	{
		return view('images.create');
	}

	public function store(Request $req)
	{
		$path = $req->file('img')->store('images');
		return $path;
	}
}
