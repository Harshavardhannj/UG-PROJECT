<?php
include 'header.php';
?>

    <div class="wait overlay">
        <div class="loader"></div>
    </div>
    <style>
    .input-borders{
        border-radius:30px;
    }
    </style>
				<!-- row -->
				
                <div class="container-fluid">
					
						
						
						<!-- /Billing Details -->
						
								<form id="signup_form" onsubmit="return false" class="login100-form">
									<div class="billing-details jumbotron">
                                    <div class="section-title">
                                        <h2 class="login100-form-title p-b-49" >Register Here</h2>
                                    </div>
                                    <div class="form-group ">
                                        <label>First Name:</label>
                                        <input class="input form-control input-borders" type="text" name="f_name" id="f_name" placeholder="First Name">
                                    </div>
                                    <div class="form-group">
                                        <label>Last Name:</label>
                                        <input class="input form-control input-borders" type="text" name="l_name" id="l_name" placeholder="Last Name">
                                    </div>
                                    <div class="form-group">
                                        <label>Email_id:</label>
                                        <input class="input form-control input-borders" type="email" name="email"  placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input class="input form-control input-borders" type="password" name="password" id="password" placeholder="password">
                                    </div>
                                    <div class="form-group">
                                        <label>Confirm Password:</label>
                                        <input class="input form-control input-borders" type="password" name="repassword" id="repassword" placeholder="confirm password">
                                    </div>
                                    <div class="form-group">
                                        <label>Mobile No:</label>
                                        <input class="input form-control input-borders" type="text" name="mobile" id="mobile" placeholder="mobile">
                                    </div>
                                    <div class="form-group">
                                        <label>Address:</label>
                                        <input class="input form-control input-borders" type="text" name="address1" id="address1" placeholder="Address">
                                    </div>
                                    <div class="form-group">
                                        <label>City:</label>
                                        <input class="input form-control input-borders" type="text" name="address2" id="address2" placeholder="City">
                                    </div>
                                    
                                    
                                    <div style="form-group">
                                       <input class="primary-btn btn-block"  value="Sign Up" type="submit" name="signup_button">
                                    </div>
                                    <div class="text-pad">
                                    <a href="" data-toggle="modal" data-target="#Modal_login"><a href="login_form.php">Already have an Account ? then login</a>
                                       
                                    </div>
                                    
                                
								</form>
                                <div class="login-marg">
						<!-- Billing Details -->
						<div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-8" id="signup_msg">
                                    

                                </div>
                                <!--Alert from signup form-->
                            </div>
                            <div class="col-md-9"></div>
                        </div>

						
					</div>
                    </div> 

					
				
				<!-- /row -->

			
<?php
include "footer.php";
?>