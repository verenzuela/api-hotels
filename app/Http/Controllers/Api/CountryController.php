<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Country;
use App\Msg;

class CountryController extends Controller
{
     /**
     * @api {get} /api/v1/countries Get list of all countries
     * @apiVersion 0.1.0
     * @apiName IndexCountries
     * @apiGroup Countries
     *
     * @apiSuccess {Number} code  Código 0 conforme todo ha ido bien.
     * @apiSuccess {Bool} true/false  True o false dependiendo del resultado.
     *
     * @apiSuccessExample Success-Response:
     *     HTTP/1.1 200 OK
     *     {
     *        "message": "Countries list",
     *        "data": [
     *          {
     *            "id": 1,
     *            "code": "PE",
     *            "name": "Perú"
     *          },
     *          {
     *            "id": 2,
     *            "code": "VE",
     *            "name": "Venezuela"
     *          },
     *          {
     *            "id": 3,
     *            "code": "EC",
     *            "name": "Ecuador"
     *          }
     *        ],
     *        "status": true,
     *        "code": 202
     *      }
     *
     * @apiError CountriesNotFound No countries found.
     *
     * @apiErrorExample Error-Response:
     *     HTTP/1.1 404 Not Found
     *     {
     *       "error": "Error countries found"
     *     }
     */
    public function index()
    {
        try {
        
            $countries = Country::all();

            if(!$countries){
                return response()->json(Msg::responseMsg('Error countries found', 'error', 404), 404);
            }else{

                if($countries->count() === 0){
                    return response()->json(Msg::responseMsg('No countries found', 'ok', 404, $countries), 404);
                }else{
                    return response()->json(Msg::responseMsg('Countries list', 'ok', 202, $countries), 202);
                }                
            }

        } catch (Exception $e) {
            return response()->json(Msg::responseMsg($e, 'error', 500), 500);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
        
            request()->validate([
                'name' => 'required|min:3|max:20|unique:countries',
                'code' => 'nullable|min:2|max:5',
            ]);

            $country = Country::create([
                'name'  => $request['name'],
                'code'  => $request['code']
            ]);

            $data = [
                'id' => $country->id,
                'name' => $country->name,
                'code' => $country->code,
                'created_at' => $country->created_at
            ];

            return response()->json(Msg::responseMsg('Country created', 'ok', 200, $data), 200);

        } catch (Exception $e) {
            return response()->json(Msg::responseMsg($e, 'error', 500), 500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
        
            $country = Country::find($id);

            if(!$country){
                return response()->json(Msg::responseMsg('No country found with id '.$id, 'ok', 404), 404);
            }else{
                return response()->json(Msg::responseMsg('Country '.$id, 'ok', 202, $country), 202);
            }

        } catch (Exception $e) {
            return response()->json(Msg::responseMsg($e, 'error', 500), 500);
        }
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            
            $method = $request->method();
            $country = Country::find($id);
                        
            if($method == 'PUT'){ //PUT - Use to update all the elements of the resource
                request()->validate(['code' => 'required|min:2|max:5']);
                if($request['name']!=$country->name) request()->validate(['name' => 'required|min:3|max:20|unique:countries']);

            }elseif ($method == 'PATCH'){ //PATCH - Use to partially update elements of the resource
                request()->validate(['code' => 'nullable|min:2|max:5']);
                if($request['name']!=$country->name) request()->validate(['name' => 'nullable|min:3|max:20|unique:countries']);

            }else{
                return response()->json(Msg::responseMsg('Method Not Allowed', 'error', 405), 405);
            }

            if( !$request['name'] && !$request['code']){
                return response()->json(Msg::responseMsg('No data to update', 'ok', 202), 202);   
            }

            if($request['name']!=$country->name) $country->name = $request['name'];
            if($request['code']!=$country->code) $country->code = $request['code'];
            
            $country->save();

            $country = Country::findOrFail($id);

            $data = [
                'id' => $country->id,
                'name' => $country->name,
                'code' => $country->code,
                'updated_at' => $country->updated_at
            ];

            return response()->json(Msg::responseMsg('Country '.$id.' updated', 'ok', 200, $data), 200);

        } catch (Exception $e) {
            return response()->json(Msg::responseMsg($e, 'error', 500), 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        try {
            
            $country = Country::find($id);

            if(!$country){
                return response()->json(Msg::responseMsg('No country found with id '.$id, 'error', 404), 404);
            }else{

                if(Country::where('id', $id)->delete()){
                
                    $response = [
                        'message'=>'Country '.$id.' deleted',
                        'data' => false, 
                        'status'=>'ok', 
                        'code'=>200 
                    ];

                    return response()->json( [ $response ], 200 );

                }else{
                    return response()->json(Msg::responseMsg('Error deleting country '.$id, 'error', 500), 500);
                }

            }
            

        } catch (Exception $e) {
            return response()->json(Msg::responseMsg($e, 'error', 500), 500);
        }
    }
}
