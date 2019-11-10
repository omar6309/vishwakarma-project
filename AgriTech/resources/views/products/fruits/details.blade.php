@extends('layouts.app')

@section('content')
<style>
    #card select{
        margin: 0 10px !important;
    }
    </style>
<div id="card">
        <div class="card custom-align-center" style="display: inline-block;">
    
            <div class="image">
                <img src="{{url('assets/images/fruits/apples.jpg')}}">
            </div>
            <div class="title">
                <h1>Apple</h1>
            </div>
            <div class="form-group">
                <label class="" for="exampleFormControlTextarea1" style="margin:0 auto;display:table;">Quantity</label>
                <div class="" style="margin: 10px;width: 206px;display: inline-flex;">
                    <input type="Text" style="margin-right: 10px;" class="form-control" id="quantity_input" aria-describedby="emailHelp" placeholder="Enter quantity" name="quantity">
                    <button id="quantity_search">Search</button>
                </div>
            </div>
            <select name="sellers" data-live-search="true" id="sellers">
                <option value="null">Select Seller</option>
            </select>
            <div class="des">
                    <span> Price: </span><span id="price_dis"></span>  &#8377
            </div>
        </div>
    </div>
<div class="container" style="border:1px solid;border-radius: 27px;">
    <h1 style="text-align: center;">Seller Details</h1>
    <div class="main">
        <label>Name: </label><span id="seller_name"></span><br>

        <label>Mobile: </label><span id="seller_mobile"></span><br>

        <label>Address: </label><span id="seller_village"></span><br><br>
        <button class="custom-align-center button">Add to cart</button>
    </div>
</div>

<script type="text/javascript">
$(document).ready(function(){
    $.ajax({
                type: "get",
                url: "{{url('getsellerslist')}}",
                data: {'cat_id':{{$cat}}},
                cache: false,
                success: function(sellers){
                    $('#sellers').html(sellers[0]);
                    $('#price_dis').html(sellers[1]);
                }
            })
        $('#sellers').change(function(){
            var seller_id = $(this).val();
            console.log(seller_id);
            $.ajax({
                type: "get",
                url: "{{url('getsellerprice')}}",
                data: {'seller_id':seller_id},
                cache: false,
                success: function(data){
                    $('#price_dis').html(data[0]);
                    $('#seller_name').html(data[1]);
                    $('#seller_village').html(data[2]);
                    $('#seller_mobile').html(data[3]);
                }
            })
        })

        $('#quantity_search').click(function(){
            var quantity = $('#quantity_input').val();
            $.ajax({
                type: "get",
                url: "{{url('getsellersbyquantity')}}",
                data: {'quantity':quantity},
                cache: false,
                success: function(sellers){
                    $('#sellers').html(sellers);
                }
            })
        })
    })
</script>
@endsection