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
        <h1 style="text-align:center;">Enter Farmer Details</h1>
        <br>
            <form enctype="multipart/form-data" method="POST" action="/account_details">
                @csrf
                <div class="form-group row">
                    <label for="Name" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="Text" class="form-control" id="Name" placeholder="Enter Name" name="name">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-form-label col-sm-2 pt-0" for="exampleInputPassword1">Date of Birth</label>
                    <div class="col-sm-10">
                        <div class="col-sm-10">
                            <input type="date" class="form-check-input form-control" id="dob" name="dob">
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="exampleFormControlFile1">Photo</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="exampleInputEmail1">Mobile Number</label>
                    <div class="col-sm-10">
                        <input type="Text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="+919876543210" name="mobile">
                    </div>
                </div>
                <fieldset class="form-group">
                    <div class="row">
                        <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
                        <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="0" checked name="gender">
                            <label class="form-check-label" for="gridRadios1">
                            Male
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="1" name="gender">
                            <label class="form-check-label" for="gridRadios2">
                            Female
                            </label>
                        </div>
                        </div>
                    </div>
                    </fieldset>
            <br>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="exampleFormControlTextarea1">Address</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="address"></textarea>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="exampleFormControlTextarea1">Adhaar</label>
                <div class="col-sm-10">
                    <input type="Text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Adhaar Number" name="adhaar">
                </div>
            </div>        
    </div>

    <div>
        <h1 style="text-align:center;">Enter Bank Details</h1>
        <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="exampleFormControlTextarea1">Bank Name</label>
                <div class="col-sm-10">
                    <select name="bank_name" data-live-search="true">
                        <option value="sbi" >State Bank of India</option>
                        <option value="sbh">State Bank of Hyderabad</option>
                        <option value="u">Union Bank of India</option>
                    </select>
                </div>
            </div>
             <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="exampleFormControlTextarea1">Account Number</label>
                    <div class="col-sm-10">
                        <input type="Text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Account Number" name="account_number">
                    </div>
                </div> 
                
                <button type="submit" style="display:flex;margin-right:auto;margin-left:auto;">Submit</button>
    </div>
</form>
    
</div>
    @endsection
