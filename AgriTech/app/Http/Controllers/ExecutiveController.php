<?php

namespace App\Http\Controllers;

use App\executive;
use Illuminate\Http\Request;

class ExecutiveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
     * @param  \App\executive  $executive
     * @return \Illuminate\Http\Response
     */
    public function show(executive $executive)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\executive  $executive
     * @return \Illuminate\Http\Response
     */
    public function edit(executive $executive)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\executive  $executive
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, executive $executive)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\executive  $executive
     * @return \Illuminate\Http\Response
     */
    public function destroy(executive $executive)
    {
        //
    }

    public function home(){
        return view('seller.home');
    }
}
