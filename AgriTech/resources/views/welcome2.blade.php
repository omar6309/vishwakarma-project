<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- JQuery -->
    <script type="text/javascript" src="{{url('assets\add-ons\MDB-4.8.11\js\jquery-3.4.1.min.js')}}"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="{{url('assets\add-ons\MDB-4.8.11\js\popper.min.js')}}"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="{{url('assets\add-ons\MDB-4.8.11\js\bootstrap.min.js')}}"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="{{url('\assets\add-ons\MDB-4.8.11\js\mdb.min.js')}}"></script>
    <!-- Font Awesome -->

    <!-- Bootstrap core CSS -->
    <link href="{{url('assets\add-ons\MDB-4.8.11\css\bootstrap.min.css')}}" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="{{url('assets\add-ons\MDB-4.8.11\css\mdb.min.css')}}" rel="stylesheet">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="{{url('assets/css/index.css')}}" rel="stylesheet">
    </head>
    <body>
      <script>
        $(document).ready(function(){
              $('#farmer_click').click(function(){
                $('#signin_account_type').val(2);
                console.log('asd')
              })
              })
        </script>
        <!--NavBar-->
        <div>
          <nav class="navbar navbar-expand-lg navbar-light gray" style="height: 55px;">
            <a class="navbar-brand" href="#"><img src="{{url('assets/images/at.png')}}" alt="Smiley face" height="60" width="60"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#">Help</a>
                    </li>
              </ul>
              <span >
                <form action="###">
                  <button class="btn btn-sm" type="button"><a href="#login" style="color: black;">LOG IN</a></button>
                  <button class="btn btn-sm" type="button" ><a href="#reg" style="color: black;">REGISTER</a></button>
                </form>
              </span>
            </div>
          </nav>
        </div>
        <!--coracel-->
        
                     <!--Carousel Wrapper-->
<div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
        <!--Indicators-->
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-1z" data-slide-to="1"></li>
          <li data-target="#carousel-example-1z" data-slide-to="2"></li>
        </ol>
        <!--/.Indicators-->
        <!--Slides-->
        <div class="carousel-inner" role="listbox" style="height: 570px;">
          <!--First slide-->
          <div class="carousel-item active">
            <img class="d-block w-100" src="{{url('assets/images/coresel1.jpg')}}"
              alt="First slide">
          </div>
          <!--/First slide-->
          <!--Second slide-->
          <div class="carousel-item">
            <img class="d-block w-100" src="{{url('assets/images/coresel2.jpg')}}"
              alt="Second slide">
          </div>
          <!--/Second slide-->
          <!--Third slide-->
          <div class="carousel-item">
            <img class="d-block w-100" src="{{url('assets/images/coresel3.jpg')}}"
              alt="Third slide">
          </div>
          <!--/Third slide-->
        </div>
        <!--/.Slides-->
        <!--Controls-->
        <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
        <!--/.Controls-->
      </div>
      <!--/.Carousel Wrapper-->
        
      </div>
        <!--body-->
        <div style="padding-top: 35px;" >
        <div style="padding-left:15px;padding-top:15px;">
                    <div class="headingl" id="login"><h1  style="text-align:center;color:black;"><b>LOGIN AS</b></h1></div>
                    <div class="main" id="card" style="padding-left:200px;padding-top:35px;">
            
                        <!--cards -->
                       
                
                       <div id="card" class="card" style="display: inline-block;"  style=”width:200px; margin-top:200px; margin-left:160px;”>
                            <a href="/vegiee">
                            <div class="image">
                                <img src="{{url('assets/images/welcome/farmer.jpg')}}">
                            </div>
                            <div class="title">
                                <div class="text-center">
                                    <!-- Button HTML (to Trigger Modal) -->
            
                                  
                             <small><b><a href="#myModal" class="trigger-btn" data-toggle="modal" id="farmer_click">FARMER</a></b></small>
                             </div>
                            </div></a>
                            </div>
                            <!--cards -->
                            
                            
                            <div class="card" style="display: inline-block;">
                            <a href="/fruits">
                            <div class="image">
                               <img src="{{url('assets/images/welcome/customer.jpg')}}">
                            </div>
                            <div class="title">
                                <div class="text-center">
                                    <!-- Button HTML (to Trigger Modal) -->
            
                                  
                             <small><b><a href="#myModal" class="trigger-btn" data-toggle="modal">CUSTOMER</a></b></small>
                             </div>
                            </div></a>
                            </div>
                            <!--cards -->
                            
                            
                            <div class="card" style="display: inline-block;">
                            <a href="">
                            <div class="image">
                               <img src="{{url('assets/images/welcome/transport.jpg')}}">
                            </div>
                            <div class="title">
                                <div class="text-center">
                                    <!-- Button HTML (to Trigger Modal) -->
            
                                  
                             <small><b><a href="#myModal" class="trigger-btn" data-toggle="modal">TRANSPORT</a></b></small>
                             </div>
                            </div></a>
                            </div>  
                    



        </div>
        <div id="myModal" class="modal fade">
	<div class="modal-dialog modal-login">
		<div class="modal-content">
			<div class="modal-header">
				<div class="avatar">
					<img src="{{url('assets/images/at.png')}}" alt="Avatar">
				</div>				
				<h4 class="modal-title">AGRITECH<br>LOGIN</h4>	
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
          <form method="POST" action="{{ route('login') }}">
              @csrf
					<div class="form-group">
						<input type="text" class="form-control" name="email" placeholder="email" required="required" id="email">		
					</div>
					<div class="form-group">
						<input type="password" class="form-control" name="password" placeholder="Password" required="required">	
          </div>        
          <input type="text" id="signin_account_type" value="" style="display:none;">
					<div class="form-group">
						<button type="submit" class="btn btn-success btn-lg btn-block login-btn">Login</button>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<a href="#">Forgot Password?</a>
			</div>
		</div>
	</div>
</div>     
        </div>
        </div>
        
          <div class="headingv" id="reg"><h1  style="text-align:center;color:black;"><b>REGISTER</b></h1></div>
            <div  style="padding:70px;">
              <form class="needs-validation" novalidate>
                <div class="form-row">
                  <div class="col-md-4 mb-3">
                    <label for="validationCustom01">Name</label>
                    <input type="text" class="form-control" id="validationCustom01" name="name" placeholder="Name" value="" required>
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                    <div class="invalid-feedback">
                      Please enter your Name                 </div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="validationCustom02">Mobile No</label>
                    <input type="text" class="form-control" id="validationCustom02" placeholder="Mobile No" name="mobileno" maxlength="10" value="" required>
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                    <div class="invalid-feedback">
                      Please provide a valid Mobile No                </div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="validationCustomUsername">Aadhaar No</label>
                    <div class="input-group">
                    
                      <input type="text" class="form-control" id="validationCustomUsername" placeholder="Aadhaar No" name="aadharno" maxlength="12" aria-describedby="inputGroupPrepend" required>
                      <div class="valid-feedback">
                        Aadhar verified                      </div>
                      <div class="invalid-feedback">
                        Please enter the Aadhaar No                   </div>
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-md-6 mb-3">
                    <label for="validationCustom03">ACCOUNT NO</label>
                    <input type="text" class="form-control" id="validationCustom03" name="accountno" placeholder="XXXXXXXXXXXXXXXX" required>
                    <div class="valid-feedback">
                      verified
                    </div>
                    <div class="invalid-feedback">
                      Please provide a valid Account No.
                    </div>
                  </div>
                  <div class="col-md-3 mb-3">
                    <label for="validationCustom04">PASSWORD</label>
                    <input type="password" class="form-control" id="validationCustom04" name="password" placeholder="PASSWORD" required>
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                    <div class="invalid-feedback">
                      Please provide a valid Password.
                    </div>
                  </div>
                  <div class="col-md-3 mb-3">
                    <label for="validationCustom05">SIGNUP AS</label>
                    <select class="form-control" name="sign" required>
                      <option value="BUYER">FARMER</option>
                      <option value="SELLER">CUSTOMER</option>
                      <option value="TRANSPORT">TRANSPORTER</option>
                     </select>
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                    <label class="form-check-label" for="invalidCheck" style="padding-top: 5px;">
                      I Agree to terms and conditions
                    </label>
                    <div class="invalid-feedback">
                      You must agree before submitting.
                    </div>
                  </div>
                </div>
                
                <button class="btn btn-success" type="submit" style="display: block; margin: 0 auto;padding-top: 5px;"><b>Sign up</b></button>
              </form>
              
              <script type="text/javascript">
              // Example starter JavaScript for disabling form submissions if there are invalid fields
              (function() {
                'use strict';
                window.addEventListener('load', function() {
                  // Fetch all the forms we want to apply custom Bootstrap validation styles to
                  var forms = document.getElementsByClassName('needs-validation');
                  // Loop over them and prevent submission
                  var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                      if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                      }
                      form.classList.add('was-validated');
                    }, false);
                  });
                }, false);
              })();
              </script>
            </div>

        </div>
        <!--footer-->
        <div>
          <!-- Footer -->
<footer class="page-footer font-small blue">

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2019 Copyright:
      <a href="https://mdbootstrap.com/education/bootstrap/"> Agritech.com</a>
    </div>
    <!-- Copyright -->
  
  </footer>
  <!-- Footer -->
        </div>
    </body>
</html> 