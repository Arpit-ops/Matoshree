


<header id="navbar" class="noPrint" style="position: sticky; top:0;">

                <div id="navbar-container" class="boxed">
                   
                    <div class="navbar-header">
                        <a href="" class="navbar-brand" style="width: 320px !important;">
                            <div class="brand-title" >
             <!--     <span class="brand-text "> <img src="{{config('app.baseURL')}}/img/new.png" class="img-rectangle" height="50" width="120"></span> -->
                                 <span class="brand-text " style="font-size: 24px;"><b>Matosharee Classes</b></span>

                            </div>
                        </a>

                    </div>
                   
                    <div class="navbar-content clearfix">
                        
                        <ul class="nav navbar-top-links pull-right">
                            
                            <li id="dropdown-user" class="dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle text-right">
                                    <span class="pull-right"> </span>
                                    <div>Admin</div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right with-arrow">
                                    <!-- User dropdown menu -->
                                    <ul class="head-list">
                                        <li>
                                            <a href="{{config('app.baseURL')}}/changepassword"> <i class="fa fa-lock"></i> Change Password </a>
                                        </li>
                                         <li>
                                            <a href="{{ route('logout') }}"> <i class="fa fa-sign-out fa-fw"></i> Logout </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
              
                        </ul>
                 </div>

             </header>

                    <!--================================-->
                    <!--End Navbar Dropdown-->
                    <script type="text/javascript">
                        function showMessage(){
                            alert("Data is successfully rejected");
                            document.getElementById("p2").style.display="none";
                            
                        }
                    </script>
                    
            </header>