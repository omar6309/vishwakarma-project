@extends('layouts.app')

@section('content')
<div class="headingv">
    <h1 style="text-align:center;color:black;padding-top: 15px;"><b>VEGITABLES</b></h1>
</div>


<div class="main">

    <!--cards -->
<a href="{{url('vegetables/details')}}">
    <div id="card">
    <div class="card" style="display: inline-block;">

        <div class="image">
            <img src="{{url('assets/images/vegiatbles/tomato.jpg')}}">
        </div>
        <div class="title">
            <h1>Tomato</h1>
        </div>
        
    </div>
</a>
    <!--cards -->

    <a href="{{url('vegetables/details')}}">
    <div class="card" style="display: inline-block;">

        <div class="image">
            <img src="{{url('assets/images/vegiatbles/brinjal.jpg')}}">
        </div>
        <div class="title">
            <h1>Brinjal</h1>
        </div>
        
    </div>
    <!--cards -->

    </a>
    <a href="{{url('vegetables/details')}}">
    <div class="card" style="display: inline-block;">

        <div class="image">
            <img src="{{url('assets/images/vegiatbles/cucumber.jpg')}}">
        </div>
        <div class="title">
            <h1>Cucumber</h1>
        </div>
        
    </div>
    <!--cards -->
    </a>
    <a href="{{url('vegetables/details')}}">

    <div class="card" style="display: inline-block;">

        <div class="image">
            <img src="{{url('assets/images/vegiatbles/beetroot.jpg')}}">
        </div>
        <div class="title">
            <h1>Beetroot</h1>
        </div>
        
    </div>
    <!--cards -->
    </a>
    <a href="{{url('vegetables/details')}}">

    <div class="card" style="display: inline-block;">

        <div class="image">
            <img src="{{url('assets/images/vegiatbles/pumpkin.jpg')}}">
        </div>
        <div class="title">
            <h1>Pumpkin</h1>
        </div>
        
    </div>
    <!--cards -->
    </a>
    <a href="{{url('vegetables/details')}}">
    <div class="card" style="display: inline-block;">

        <div class="image">
            <img src="{{url('assets/images/vegiatbles/lettuce.jpg')}}">
        </div>
        <div class="title">
            <h1>Lettuce</h1>
        </div>
        
    </div>
    <!--cards -->
    </a>
    <a href="{{url('vegetables/details')}}">
    <div class="card" style="display: inline-block;">

        <div class="image">
            <img src="{{url('assets/images/vegiatbles/raddish.jpg')}}">
        </div>
        <div class="title">
            <h1>Radish</h1>
        </div>
        
    </div>
    <!--cards -->
    </a>
    <a href="{{url('vegetables/details')}}">

    <div class="card" style="display: inline-block;">

        <div class="image">
            <img src="{{url('assets/images/vegiatbles/chilli.jpg')}}">
        </div>
        <div class="title">
            <h1>Chili</h1>
        </div>
        
    </div>
    <!--cards -->

    </a>
    <a href="{{url('vegetables/details')}}">
    <div class="card" style="display: inline-block;">

        <div class="image">
            <img src="{{url('assets/images/vegiatbles/corn.jpg')}}">
        </div>
        <div class="title">
            <h1>Corn</h1>
        </div>
    
    </div>
    </div>
</a>
</div>
@endsection
