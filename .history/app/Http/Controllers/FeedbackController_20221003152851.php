<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateFeedbackRequest;
use Exception;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('tanya',[
        "title" =>"kontak-kami"
        ]);
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
     * @param  \App\Http\Requests\StoreFeedbackRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //simpan data
        $validatedData = $request->validate([
            'name'=>'required',
            'email'=>'required',
            'subjek'=>'required',
            'pesan'=>'required'
        ]);
        // dd($validatedData);
        // die();
        try{
            Feedback::create($validatedData);
            return redirect('/tanya')->with('success', 'Kritik dan saran telah kami terima. Mohon ditunggu');
        }
        catch(Exception $e){
            return redirect()->back()->with('error', 'silakan cek kembali');
        }
       
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function show(Feedback $feedback)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function edit(Feedback $feedback)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFeedbackRequest  $request
     * @param  \App\Models\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFeedbackRequest $request, Feedback $feedback)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function destroy(Feedback $feedback)
    {
        //
    }
}
