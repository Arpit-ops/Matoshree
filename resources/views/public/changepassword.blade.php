 @extends('layouts.app')
@section('content')
<!-- <style type="text/css">
    [class^="col-"]:not(.pad-no) {
    padding-left: 124px!important;
    padding-right: 124px!important;
}
</style> -->
<style type="text/css">
    #container.mainnav-full #page-content {
    padding: 10px 20px 0px!important;
}
</style>
<link rel="stylesheet" type="text/css" href="{{asset('css/toaster.css')}}" />
 <script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
 <script type="text/javascript" src="{{asset('js/toaster.min.js')}}"></script>
              <div class="boxed">
                <!--CONTENT CONTAINER-->
                <!--===================================================-->
                <div id="content-container">
                   
                    <!--Page Title-->
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <div class="pageheader">
                        <!-- <h3><i class=""></i> Change Password </h3>
                        <div class="breadcrumb-wrapper">
                            <span class="label">You are here:</span>
                            <ol class="breadcrumb">
                                <li> <a href="#"> Home </a> </li>
                                <li class="active"> Forms Validation </li>
                            </ol>
                        </div> -->
                    </div>
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <!--End page title-->
                    <!--Page content-->
                    <!--===================================================-->
                    <div id="page-content">
                        <div class="row">
                            <div class="col-lg-5">
                               
                                
                                
                                <div class="panel">
                                    <!-- Panel heading -->
                                  <div class="panel-heading">
                                        <h3 class="panel-title">Change Password </h3>
                                    </div>
                                    
                                        <form method="post" action="{{config('app.baseURL')}}/changepassword" id="demo-password" class="form-horizontal">
                                        <div class="panel-body">
                                            <!--IDENTICAL VALIDATOR-->
                                            <!--===================================================-->
                                            <fieldset>
                                                <div class="form-group">
                                                    <label class="col-lg-3 control-label">Password</label>
                                                    <div class="col-lg-7">
                                                        <input type="password" class="form-control" id="password" name="password"  placeholder="New Password" required/>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-3 control-label">Confirm password</label>
                                                    <div class="col-lg-7">
                                                        <input type="password" class="form-control" id="confirm_password" name="password_confirm" placeholder="Confirm password" required/>
                                                    </div>
                                                </div>
                                            </fieldset>
                                            <!--===================================================-->
                                        </div>
                                        <div class="panel-footer">
                                            <div class="row">
                                                <div class="col-sm-7 col-sm-offset-3">
                                                    <button class="btn btn-primary" type="submit">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                
                               
                               
                                
                            </div>
                        </div>
                    </div>
                    <!--===================================================-->
                    <!--End page content-->
                </div>
                
            </div>
     
     <script type="text/javascript">
         var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
     </script>

                    @endsection



