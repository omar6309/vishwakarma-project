<?php

namespace App\Http\Controllers;

use App\product;
use App\farmer;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
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
     * @param  \App\item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(item $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(item $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, item $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(item $product)
    {
        //
    }

    public function getsellerslist(Request $request){
        $products = product::where('sub_cat_id_fk',$request['cat_id'])->get();
        $data='';
        $i=0;
        $price=0;
        $village='';
        $name='';
        foreach($products as $product){
            $seller = farmer::where('id',$product->farmer_id_fk)->first();
            $data=$data."<option value=".$seller->id.">".$seller->name."</option>";
            if($i==0){
                $price = $product->price;
                $i=1;
                $village = $seller->address;
                $name = $seller->name;
            }
        }
        $response=[];
        $response[0]=$data;
        $response[1]=$price;
        $response[2]=$village;
        $response[3]=$name;
        return ($response);
    }

    public function getsellerprice(Request $request){
        $product = product::where('id',$request['seller_id'])->first();
        $seller = farmer::where('id',$product->farmer_id_fk)->first();
        $response=[];
        $response[0] = $product->price;
        $response[1]= $seller->name;
        $response[2] = $seller->address;
        $response[3] = $seller->mobile;
        return $response;
    }

    public function getsellersbyquantity(Request $request){
        $products = product::where('quantity',$request['quantity'])->get();
        $data='';
        $i=0;
        $price=0;
        foreach($products as $product){
            $seller = farmer::where('id',$product->farmer_id_fk)->first();
            $data=$data."<option value=".$seller->id.">".$seller->name."</option>";
            if($i==0){
                $price = $product->price;
                $i=1;
            }
        }
        $response=[];
        $response[0]=$data;
        $response[1]=$price;
        return ($response);
    }
}
