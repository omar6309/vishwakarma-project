@extends('layouts.app')

@section('content')
        <div style="padding-left:15px;padding-top:15px;">
            <div class="heading">
                <h1 style="text-align:center;color:black;"><b>SHOP BY CATERGORY</b></h1>
            </div>
            <div class="main" style="padding-left:200px;padding-top:35px;">
                <!--cards -->
                <div id="card">
                <div class="card" style="display: inline-block; ">
                    <a href="/vegetables">
                        <div class="image">
                            <img src="{{url('assets/images/category/veg.jpg')}}">
                        </div>
                        <div class="title">
                            <small><b>VEGIES</b></small>
                        </div>
                    </a>
                </div>
                <div class="card" style="display: inline-block;">
                    <a href="/fruits">
                        <div class="image">
                            <img src="{{url('assets/images/category/fruits.jpg')}}">
                        </div>
                        <div class="title">
                            <small><b>FRUITS</b></small>
                        </div>
                    </a>
                </div>
                <div class="card" style="display: inline-block;">
                    <a href="/grains">
                        <div class="image">
                            <img src="{{url('assets/images/category/grains.jpg')}}">
                        </div>
                        <div class="title">
                            <small><b>GRAINS</b></small>
                        </div>
                    </a>
                </div>
            </div>
            </div>
            <div>
            </div>
    </div>
    @endsection
