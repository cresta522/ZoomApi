<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Firebase\JWT\JWT;
// use \GuzzleHttp\Client as Curl;

class ZoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(env('ZOOM_API_KEY') === null){
            dd('https://marketplace.zoom.us/develop/apps でAPI取得してきてね');
        }
        
        $claims = [
            'exp' => strtotime('+90 minutes'),
            'iss' => env('ZOOM_API_KEY'),
        ];
        
        $path = \Config::get('zoom.base_url') . 'users/me';
        
        $jwt = JWT::encode($claims, env('ZOOM_API_SECRET'), 'HS256');
        $jwt = env('ZOOM_JWT');
        
        $client = new \GuzzleHttp\Client();
        
        $headers = [
            // 'Authorization' => 'Bearer '. $jwt,
            'User-Agent' => 'Zoom-api-Jwt-Request',
            'Content-Type' => 'application/json; charset=UTF-8',
        ];
        
        $claims['header'] = $headers;
        $claims['auth'] = ['Bearer' => $jwt];
        
        // dd($jwt, $claims);
        $response_body = $client->get($path,
        [
            'query' => [
                'page_number' => '1',
                'page_size' => '30',
                'status' => 'active',
            ],
        
        ], $claims);
        
        
        dd($response_body);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
