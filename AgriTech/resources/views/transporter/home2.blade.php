@extends('layouts.app')

@section('content')

<div class="container">
        <br><br><br>
          <h4><b>PENDING ORDERS</b></h4>
          <small><center>NO PENDING ORDERS</center></small>
    
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
          <td>RAJU</td>
          <td>WARANGAL</td>
          <td>KISHORE</td>
          <td>HYDERABAD</td>
          <td>APPLE-75KG</td>
          <td><button>CLICK FOR DETAILS</button></td>
          <td>DELIVERED ON<BR>09-11-2019</td>
        </tr>
        <tr>
          <td>2</td>
          <td>VIKRAM</td>
          <td>GUNTUR</td>
          <td>RAJIV</td>
          <td>VISHAKAPATNAM</td>
          <td>CHILLI-100KG</td>
          <td><button>CLICK FOR DETAILS</button></td>
          <td>DELIVERED ON<BR>02-11-2019</td>
        </tr>
        <tr>
          <td>3</td>
          <td>RAMAIAH</td>
          <td>ADILABAD</td>
          <td>RAMYA</td>
          <td>CHENNAI</td>
          <td>RICE-500KG</td>
          <td><button>CLICK FOR DETAILS</button></td>
          <td>DELIVERED ON<BR>30-10-2019</td>
        </tr>
        <tr>
          <td>4</td>
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
            <img src="otp.png" alt="Avatar">
          </div>        
          <h4 class="modal-title">ORDER CONFIRMATION<br><small>ENTER OTP</small></h4>  
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body">
          <form action="/examples/actions/confirmation.php" method="post">
            <div class="form-group">
              <input type="text" class="form-control" name="OTP" placeholder="AT-XXXX" required="required">   
            </div>
             
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