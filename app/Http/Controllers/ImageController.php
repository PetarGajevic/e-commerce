<?php

namespace App\Http\Controllers;

use Request;
use Validator,Redirect,Response,File;
use Illuminate\Support\Facades\Input;
//  use \Input as Input;

class ImageController extends Controller
{
  public function index() {
	  return view('work');
  }

  public function upload(){
		
		if(Request::hasFile('file')){
			$file = Request::file('file');
			$file->move('image', $file->getClientOriginalName());
			$image =  $file->getClientOriginalName();
			return view('work', compact('image'));
		}

	}


}
