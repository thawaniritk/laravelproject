<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;
use Session;
use Config;
use Carbon\Carbon;
// use Carbon/Carbon;
// use App\UserRequest;
// use App\ClientActivity;
use Validator;
use Auth;

use Illuminate\Http\Request;
use App\Image;
use App\Product;

class ImageController extends Controller
{
    public function index(Request $request)
    {
    	$ImageData = Image::all();
    	foreach ($ImageData as $value) {
		    $value->id = $value->id;
    	}
        	return view('image',compact('ImageData'));
    }
    public function displayImage(Request $request)
    {
        $id = $_POST["id"];
        $image = Image::where('id', $id)->first();
    
        if($image)
        {
            return view('/selecttype')->with('image', $image);
        }  
        else
        {
            return 'false';
        }
    }
    public function interiorPage($id)
    {
        $image = Image::where('id', $id)->first();
        if($image)
        {
            return view('/interiortype', compact('image'));
            // return view('/interiortype')->with('image', $image);
            
        }
        else
        {
            return redirect('/displayImage');
        }
    }
    public function exteriorPage($id)
    {
        $image = Image::where('id', $id)->first();
        if($image)
        {
            return view('/exteriortype', compact('image'));
            // return view('/interiortype')->with('image', $image);
        }
        else
        {
            return redirect('/displayImage');
        }
    }
    public function saveData(Request $request)
    {
        
        $input = $request->all();
        $arraytoString = implode(',', $request->input('tag'));
        // $image = $request->file('image');
        $data['tag'] = $arraytoString;
        $data['image'] = $input['image'];
        $data['type'] = $input['check'];

        Product::create($data);
        return redirect('get/product');

    }
    public function fetchProduct(Request $request)
    {       
       $productData = Product::all();
       return view('list',compact('productData'));
    } 
}
