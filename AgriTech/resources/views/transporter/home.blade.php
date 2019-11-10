@extends('layouts.app')

@section('content')
<div class="container">
        <br><br><br>
          <h4><b>PENDING ORDERS</b></h4>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>S.NO</th>
          <th>SELLER'S NAME</th>
          <th>PICKUP</th>
          <th>BUYER'S NAME</th>
          <th>DROP</th>
          <th>ITEM</th>
          <th>COMPLETE DETAILS</th>
          <th>CONFIRMATION</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>RAJU</td>
          <td>WARANGAL</td>
          <td>KISHORE</td>
          <td>HYDERABAD</td>
          <td>APPLE-75KG</td>
          <td><button>CLICK FOR DETAILS</button></td>
          <td><button><a href="#myModal" class="trigger-btn" data-toggle="modal">CONFIRM DELIVERY</a></button></td>
      </tbody>
    </table>
    <br><br>
    <h4><b>COMPLETED ORDERS</b></h4>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>S.NO</th>
          <th>SELLER'S NAME</th>
          <th>PICKUP</th>
          <th>BUYER'S NAME</th>
          <th>DROP</th>
          <th>ITEM</th>
          <th>COMPLETE DETAILS</th>
          <th>CONFIRMATION</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>VIKRAM</td>
          <td>GUNTUR</td>
          <td>RAJIV</td>
          <td>VISHAKAPATNAM</td>
          <td>CHILLI-100KG</td>
          <td><button>CLICK FOR DETAILS</button></td>
          <td>DELIVERED ON<BR>02-11-2019</td>
        </tr>
        <tr>
          <td>2</td>
          <td>RAMAIAH</td>
          <td>ADILABAD</td>
          <td>RAMYA</td>
          <td>CHENNAI</td>
          <td>RICE-500KG</td>
          <td><button>CLICK FOR DETAILS</button></td>
          <td>DELIVERED ON<BR>30-10-2019</td>
        </tr>
        <tr>
          <td>3</td>
          <td>RAMU</td>
          <td>KOCHI</td>
          <td>KEVA</td>
          <td>HYDERABAD</td>
          <td>BANANA-250KG</td>
          <td><button>CLICK FOR DETAILS</button></td>
          <td>DELIVERED ON<BR>25-10-2019</td>
        </tr>
      </tbody>
        
    </table>
  </div>
  <div id="myModal" class="modal fade">
    <div class="modal-dialog modal-login">
      <div class="modal-content">
        <div class="modal-header">
          <div class="avatar">
            <img src="{{url('assets/images/otp.png')}}" alt="Avatar">
          </div>        
          <h4 class="modal-title">ORDER CONFIRMATION<br><small>ENTER OTP</small></h4>  
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body">
          <form action="/redirecttransport" method="post">
            @csrf
            <div class="form-group">
              <center><input style="width: 85px;" type="text" class="form-control" name="OTP" placeholder="XXXXXX"  maxlength="6" size="6" required="required">   
            </center></div>
             
            </div>        
            <div class="form-group">
              <button type="submit" class="btn btn-link btn-lg btn-block login-btn">SUBMIT</button>
            </div>
            <small class="modal-title"><center>RESEND OTP</center></small>
          </form>
        </div>
       
      </div>
    </div>
  </div>  
@endsection