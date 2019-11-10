@extends('layouts.app')

@section('content')
<div class="">
    <a href="{{url('farmer/register')}}"><button id="register" class="button">Register</button></a>
    <a href="{{url('farmer/sell')}}"><button id="register" class="button">Sell</button></a>
</div>
    
@endsection