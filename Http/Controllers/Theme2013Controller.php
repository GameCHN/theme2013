<?php namespace YC\Theme2013\Http\Controllers;

use YCMS\Modules\Routing\Controller;

class Theme2013Controller extends Controller {
	
	public function index()
	{
		return view('theme2013::index');
	}
	
}