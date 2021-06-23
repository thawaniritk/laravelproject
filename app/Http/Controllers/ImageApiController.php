<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Mail;
// use App\Http\Controllers\Api\APIBaseController as APIBaseController;

use App\Image;
use Validator;
use Auth;
// use Mail;
use DB;
use Hash;
use Config;
use Exception;


class ImageApiController extends Controller
{
    public function store(Request $request)
    {
    	try
    	{
       		$input = $request->all();
            $image = isset($input['image']) ? $input['image'] : '';

        	if($image != "")
        	{
        		$reqArr = [];
				$request->validate([
                    'image' => 'image|mimes:jpeg,png,jpg|max:2048',
                ]);

                $input['image'] = time().'.'.$request->image->getClientOriginalExtension();
                $request->image->move(public_path('Images/'), $input['image']);
                $reqArr['image'] = $input['image'];
                $last_id = Image::create($reqArr);
                
                if($last_id)
                {
                	$result = Image::where("id", $last_id->id)->first();
                	$response = [
          			  'status' => 'success',
            		  'data'    => $result,
                      'message' => 'Image created successfully in database',
        			];
					return response()->json($response, 200);
					// return $this->sendResponse($result, 'Image created successfully in database');
				}
				else
				{
       		// print_r('1');
       		// die();
					$response = [
          			  'status' => 'error',
            		  
                      'message' => $error
        			];
					return response()->json($response, 200);
					// return $this->sendError('Image not added.');
				}

        	}
        	else
        	{
			   	return $this->sendError('please select Image'); 
			}
    	}
       catch (\Exception $e) 
       {
       		$response = [
          			  'status' => 'error',
            		  
                      'message' => $e
        			];
			return response()->json($response, 200);
            // return $this->sendError($e->getMessage());
       } 
    }
}
