<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    public function index()
    {
        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'http://127.0.0.1:8000/api/',
            // You can set any number of default request options.
            'timeout'  => 2.0,
        ]);
    
        // dd($response);
        $response = $client->request('GET', 'boleta/');
        $boletas = json_decode($response->getBody()->getContents());
    
        return view('boletas.index', compact('boletas'));
    }
    public function indexboleta($id)
    {

        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'http://127.0.0.1:8000/api/',
            // You can set any number of default request options.
            'timeout'  => 2.0,
        ]);
    
        // dd($response);
        $response = $client->request('GET', 'boleta/'.$id);
        $boleta = json_decode($response->getBody()->getContents());
    
        return view('boletas.byid', compact('boleta'));
    }
    public function editboleta($id)
    {

        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'http://127.0.0.1:8000/api/',
            // You can set any number of default request options.
            'timeout'  => 2.0,
        ]);
    
        // dd($response);
        $response = $client->request('GET', 'boleta/'.$id);
        $boleta = json_decode($response->getBody()->getContents());
    
        return view('boletas.byid', compact('boleta'));
    }
}
