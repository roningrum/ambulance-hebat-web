<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Dflydev\DotAccessData\Data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response = Http::get('http://admin-ambulance-hebat-web.test/api/foto-kegiatan');
        $responsePost = Http::post('http://119.2.50.173:6006/token/',[
            'username'=> 'admin',
            'password'=>'admin'
        ]);
        //ambilToken
        $responseToken = $responsePost->json();
        $token = $responseToken['access'];

        //lokasi
        $responseGet = Http::withToken($token, 'Bearer')->get('http://119.2.50.173:6006/api/ambulans');
        $dataAmbulan = $responseGet->json();
        $location= $dataAmbulan['data'];

        $data = $response->json();
        // dd($data);
        // die();
        return view('about',[
            'title'=>"about",
            'location'=>$location
        ],
        compact('data'));
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
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        return view('about',[
            'image' => $gallery
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery)
    {
        //
    }
}
