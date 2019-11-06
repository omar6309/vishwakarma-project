@extends('layouts.app')

@section('content')
<div class="headingv">
    <h1 style="text-align:center;color:black;padding-top: 15px;"><b>VEGITABLES</b></h1>
</div>


<div class="main">

    <!--cards -->


    <div class="card" style="display: inline-block;">

        <div class="image">
            <img src="{{url('assets/images/vegiatbles/tomato.jpg')}}">
        </div>
        <div class="title">
            <h1>Tomato</h1>
        </div>
        <div class="des">
            <p>price : 50/kg</p>
        </div>
    </div>
    <!--cards -->


    <div class="card" style="display: inline-block;">

        <div class="image">
            <img src="{{url('assets/images/vegiatbles/brinjal.jpg')}}">
        </div>
        <div class="title">
            <h1>Brinjal</h1>
        </div>
        <div class="des">
            <p>Price : 20/kg</p>
        </div>
    </div>
    <!--cards -->


    <div class="card" style="display: inline-block;">

        <div class="image">
            <img src="{{url('assets/images/vegiatbles/cucumber.jpg')}}">
        </div>
        <div class="title">
            <h1>Cucumber</h1>
        </div>
        <div class="des">
            <p>Price : 12/kg</p>
        </div>
    </div>
    <!--cards -->


    <div class="card" style="display: inline-block;">

        <div class="image">
            <img src="{{url('assets/images/vegiatbles/beetroot.jpg')}}">
        </div>
        <div class="title">
            <h1>Beetroot</h1>
        </div>
        <div class="des">
            <p>Price : 23/kg</p>
        </div>
    </div>
    <!--cards -->


    <div class="card" style="display: inline-block;">

        <div class="image">
            <img src="{{url('assets/images/vegiatbles/pumpkin.jpg')}}">
        </div>
        <div class="title">
            <h1>Pumpkin</h1>
        </div>
        <div class="des">
            <p>Price : 32/kg</p>
        </div>
    </div>
    <!--cards -->

    <div class="card" style="display: inline-block;">

        <div class="image">
            <img src="{{url('assets/images/vegiatbles/lettuce.jpg')}}">
        </div>
        <div class="title">
            <h1>Lettuce</h1>
        </div>
        <div class="des">
            <p>Price : 10/kg</p>
        </div>
    </div>
    <!--cards -->

    <div class="card" style="display: inline-block;">

        <div class="image">
            <img src="{{url('assets/images/vegiatbles/raddish.jpg')}}">
        </div>
        <div class="title">
            <h1>Radish</h1>
        </div>
        <div class="des">
            <p>Price : 20/kg</p>

        </div>
    </div>
    <!--cards -->


    <div class="card" style="display: inline-block;">

        <div class="image">
            <img src="{{url('assets/images/vegiatbles/chilli.jpg')}}">
        </div>
        <div class="title">
            <h1>Chili</h1>
        </div>
        <div class="des">
            <p>Price : 15/kg</p>
        </div>
    </div>
    <!--cards -->


    <div class="card" style="display: inline-block;">

        <div class="image">
            <img src="{{url('assets/images/vegiatbles/corn.jpg')}}">
        </div>
        <div class="title">
            <h1>Corn</h1>
        </div>
        <div class="des">
            <p>Price : 23/kg</p>
        </div>
    </div>
</div>
@endsection
