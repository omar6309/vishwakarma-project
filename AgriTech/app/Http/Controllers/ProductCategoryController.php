<?php

namespace App\Http\Controllers;

use App\product_category;
use App\product_sub_category;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
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
     * @param  \App\product_category  $product_category
     * @return \Illuminate\Http\Response
     */
    public function show(product_category $product_category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\product_category  $product_category
     * @return \Illuminate\Http\Response
     */
    public function edit(product_category $product_category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\product_category  $product_category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, product_category $product_category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\product_category  $product_category
     * @return \Illuminate\Http\Response
     */
    public function destroy(product_category $product_category)
    {
        //
    }

    public function getChildCategories(Request $request){
        $child_categories = product_sub_category::where('parent_cat_id_fk',$request['parent_id'])->get();

        $data='';
        foreach($child_categories as $child_category){
            $data=$data."<option value=".$child_category->id.">".$child_category->name."</option>";
        }
        return ($data);
    }
}
