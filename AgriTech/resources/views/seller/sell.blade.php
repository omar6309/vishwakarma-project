@extends('layouts.app')

@section('content')
<div class="container">
    <style>
        .dropdown-menu{
            overflow: visible !important;
        }
        </style>
    <link href="{{url('assets/add-ons/bootstrap-select.css')}}">
    <script src="{{url('assets/add-ons/bootstrap-select.js')}}"></script>
    <div>
        <div class="alert-show" style="display:hidden">
        </div>
        <h1 style="text-align:center;">Enter Product Details</h1>
        <br>
                @csrf
                <div class="form-group row">
                    <label for="Name" class="col-sm-2 col-form-label">Product Category</label>
                    <div class="col-sm-10">
                        <select name="parent_category" data-live-search="true" id="parent_cat">
                            <option value="null">Select Category</option>
                            @foreach($categories as $category)
                            <option value="{{$category->id}}" >{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="exampleInputEmail1">Product Name</label>
                    <div class="col-sm-10">
                        <div class="col-sm-10">
                            <select name="bank_name" data-live-search="true" name="child_category" id="child_cat">
                                <option value="" >Select Product Name</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-form-label col-sm-2 pt-0" for="exampleInputPassword1">Quantity</label>
                    <div class="col-sm-10">
                        <div class="col-sm-10">
                            <input type="text" class="form-check-input form-control" id="quantity" name="quantity" style="width: auto !important;">
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="exampleInputEmail1">Units</label>
                    <div class="col-sm-10">
                        <div class="col-sm-10">
                                <input type="text" class="form-check-input form-control" id="quantity" name="quantity" style="width: auto !important;" placeholder="kg">
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="exampleInputEmail1">Price</label>
                    <div class="col-sm-10">
                        <div class="col-sm-10">
                                <input type="text" class="form-check-input form-control" id="price" name="price" style="width: auto !important;">
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                        <label class="col-form-label col-sm-2 pt-0" for="exampleInputPassword1">Farmer Id</label>
                        <div class="col-sm-10">
                            <div class="col-sm-10">
                                <input type="text" class="form-check-input form-control" id="farmer_id" name="farmer_id_fk" style="width: auto !important;">
                            </div>
                        </div>
                    </div>
                    <button class="button custom-align-center" id="verify">Verify</button>
                <br>
                <h1 style="text-align:center;">Confirm Farmer Details</h1>
                <fieldset disabled>
                        <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="disabledTextInput">Name</label>
                                <div class="col-sm-10">
                                    <input type="Text" class="form-control" id="confirmname" aria-describedby="emailHelp" name="mobile" style="width: auto !important;">
                                </div>
                            </div>
                            <div class="form-group row">
                                    <label class="col-sm-2 col-form-label" for="disabledTextInput">Photo</label>
                                    <div class="col-sm-10">
                                        <img src="{{url('')}}">
                                    </div>
                                </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="disabledTextInput">Mobile Number</label>
                        <div class="col-sm-10">
                            <input type="Text" class="form-control" id="confirmmobile" aria-describedby="emailHelp" name="mobile" style="width: auto !important;">
                        </div>
                    </div>
            <br>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="exampleFormControlTextarea1">Address</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="confirmaddress" rows="3" name="address"></textarea>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="exampleFormControlTextarea1">Adhaar</label>
                <div class="col-sm-10">
                    <input type="Text" class="form-control" id="confirmadhaar" aria-describedby="emailHelp" name="adhaar">
                </div>
            </div>     
                </fieldset>
            <button class="button custom-align-center" id="submit">Submit</button>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        $('#parent_cat').change(function(){
            var parent_id = $(this).val();
            console.log(parent_id);
            $.ajax({
                type: "get",
                url: "{{url('getchildcategories')}}",
                data: {'parent_id':parent_id},
                cache: false,
                success: function(child_cats){
                    $('#child_cat').html(child_cats);
                }
            })
        })
        $('#verify').click(function(){
            var farmer_id_fk = $('input[name=farmer_id_fk]').val();
            $.ajax({
                type: "get",
                url: "{{url('getfarmerdetails')}}",
                data: {'farmer_id_fk':farmer_id_fk},
                cache: false,
                success: function(details){
                    //$('#mobile').value=;
                    console.log(details[0]['name']);
                    $('#confirmname').val(details[0]['name']);
                    $('#confirmmobile').val(details[0]['mobile']);
                    $('#confirmaddress').val(details[0]['address']);
                    $('#confirmadhaar').val(details[0]['adhaar']);
                }
            })
        })

    
        $('#submit').click(function() {
    location.reload();
});
    })
</script>
@endsection
