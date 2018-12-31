<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Msg;

class DocumentationController extends Controller
{

	public function index()
    {
        try {
        	
        	return response()->view('api/documentation/index', [], 200);

        } catch (Exception $e) {
            return response()->json(Msg::responseMsg($e, 'error', 500), 500);
        }
    }


    public function show($doc)
    {
        try {

        	return response()->view('api/documentation/'.$doc, [], 200);

        } catch (Exception $e) {
            return response()->json(Msg::responseMsg($e, 'error', 500), 500);
        }
    }


}