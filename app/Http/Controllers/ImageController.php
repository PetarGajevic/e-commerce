<?php

namespace App\Http\Controllers;

//use Request;
use Illuminate\Http\Request;
use App\Http\Requests;
use Validator,Redirect,Response,File;
use Illuminate\Support\Facades\Input;
use Image;


class ImageController extends Controller
{
  public function index() {
	  return view('work');
  }

  public function upload(Request $request){
		
	

			$this->validate($request, [
				'file' => 'required|mimes:jpeg,png,jpg,svg,ico|max:2048',
			],
			['file.required' => 'Fajl mora biti: jpeg, png, svg,jpg, ico']
		);

			$file = $request->file('file');
           
            $file->move('image', $file->getClientOriginalName());
            $image =  $file->getClientOriginalName();
          /*   $file->resize(200, 200, function($constraint){
                $constraint->aspectRatio();
            }); */
            $path = pathinfo($image);
            $ext = $path['extension'];

            return view('work', compact(['image', 'ext']));

	}

	public function resizeImage()
    {
        return view('resizeImage');
    }
  
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function resizeImagePost(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
  
        $image = $request->file('image');
        $input['imagename'] = time().'.'.$image->extension();
     
        $destinationPath = public_path('/thumbnail');
        $img = Image::make($image->path());
        $img->resize(100, 100, function ($constraint) {
            $constraint->aspectRatio();
        })->save($destinationPath.'/'.$input['imagename']);
   
        $destinationPath = public_path('/images');
        $image->move($destinationPath, $input['imagename']);
   
        return back()
            ->with('success','Image Upload successful')
            ->with('imageName',$input['imagename']);
    }


}
