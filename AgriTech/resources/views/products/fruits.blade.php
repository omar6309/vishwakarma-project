@extends('layouts.app')

@section('content')
<div class="main">
    <!--cards -->
    <a href="{{url('fruits/details')}}">
    <div id="card">
    <div class="card" style="display: inline-block;">

        <div class="image">
            <img src="{{url('assets/images/fruits/apples.jpg')}}">
        </div>
        <div class="title">
            <h1>Apple</h1>
        </div>
    </div>
    <!--cards -->
</a>
    <a href="{{url('fruits/details')}}">

    <div class="card" style="display: inline-block;">

        <div class="image">
            <img src="{{url('assets/images/fruits/oranges.jpg')}}">
        </div>
        <div class="title">
            <h1>Orange</h1>
        </div>
    </div>
    <!--cards -->

    </a>
    <a href="{{url('fruits/details')}}">
    <div class="card" style="display: inline-block;">

        <div class="image">
            <img src="{{url('assets/images/fruits/pineapple.jpg')}}">
        </div>
        <div class="title">
            <h1>PineApple</h1>
        </div>
    </div>
    <!--cards -->
    </a>
    <a href="{{url('fruits/details')}}">

    <div class="card" style="display: inline-block;">

        <div class="image">
            <img src="{{url('assets/images/fruits/banana.jpg')}}">
        </div>
        <div class="title">
            <h1>Banana</h1>
        </div>
    </div>
    <!--cards -->
    </a>
    <a href="{{url('fruits/details')}}">

    <div class="card" style="display: inline-block;">

        <div class="image">
            <img src="{{url('assets/images/fruits/blueberries.jpg')}}">
        </div>
        <div class="title">
            <h1>Blueberrie</h1>
        </div>
    </div>
    <!--cards -->
    </a>
    <a href="{{url('fruits/details')}}">
    <div class="card" style="display: inline-block;">

        <div class="image">
            <img src="{{url('assets/images/fruits/dragonfruit.jpg')}}">
        </div>
        <div class="title">
            <h1>Dragon fruit</h1>
        </div>
    </div>
    <!--cards -->
    </a>
    <a href="{{url('fruits/details')}}">
    <div class="card" style="display: inline-block;">

        <div class="image">
            <img src="{{url('assets/images/fruits/cherries.jpg')}}">
        </div>
        <div class="title">
            <h1>Cherries</h1>
        </div>
    </div>
    <!--cards -->
    </a>
    <a href="{{url('fruits/details')}}">

    <div class="card" style="display: inline-block;">

        <div class="image">
            <img src="{{url('assets/images/fruits/eggfruit.jpg')}}">
        </div>
        <div class="title">
            <h1>Egg Fruit</h1>
        </div>
    </div>
    <!--cards -->

    </a>
    <a href="{{url('fruits/details')}}">
    <div class="card" style="display: inline-block;">

        <div class="image">
            <img src="{{url('assets/images/fruits/grapes.jpg')}}">
        </div>
        <div class="title">
            <h1>Grapes</h1>
        </div>
    </div>
    </a>
    </div>
</div>
@endsection
