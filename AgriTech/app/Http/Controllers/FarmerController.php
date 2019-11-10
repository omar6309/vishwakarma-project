<?php

namespace App\Http\Controllers;

use App\farmer;
use App\farmer_authentication_id;
use App\product_category;
use App\product_sub_category;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
class FarmerController extends Controller
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
     * @param  \App\farmer  $farmer
     * @return \Illuminate\Http\Response
     */
    public function show(farmer $farmer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\farmer  $farmer
     * @return \Illuminate\Http\Response
     */
    public function edit(farmer $farmer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\farmer  $farmer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, farmer $farmer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\farmer  $farmer
     * @return \Illuminate\Http\Response
     */
    public function destroy(farmer $farmer)
    {
        //
    }

    public function getregister(){
        return view('signups.farmer-register');
    }

    public function postregister(Request $request){
        unset($request['_token']);
        $id = Farmer::create($request->all())->id;
        $authentication_id = rand(10000,999999);
        $auth_table = new farmer_authentication_id;
        $auth_table->farmer_id_fk = $id;
        $auth_table->authentication_id = $authentication_id;
        $auth_table->save();
        return ($authentication_id);
    }

    public function getsell(){
        $category = Product_category::all();
        return view('seller.sell',['categories'=>$category]);
    }

    public function getfarmerdetails(Request $request){
        $farmer = farmer_authentication_id::where('authentication_id',$request->farmer_id_fk)->first();
        $farmer_details = farmer::where('id',$farmer['id'])->get();
        return ($farmer_details->toarray());
    }
}
