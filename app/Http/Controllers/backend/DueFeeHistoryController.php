<?php

namespace App\Http\Controllers\backend;

use App\model\dueFeeHistory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DueFeeHistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        //
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
     * @param  \App\model\dueFeeHistory  $dueFeeHistory
     * @return \Illuminate\Http\Response
     */
    public function show(dueFeeHistory $dueFeeHistory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\model\dueFeeHistory  $dueFeeHistory
     * @return \Illuminate\Http\Response
     */
    public function edit(dueFeeHistory $dueFeeHistory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\model\dueFeeHistory  $dueFeeHistory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, dueFeeHistory $dueFeeHistory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\model\dueFeeHistory  $dueFeeHistory
     * @return \Illuminate\Http\Response
     */
    public function destroy(dueFeeHistory $dueFeeHistory)
    {
        //
    }
}
