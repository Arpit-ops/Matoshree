<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>My Eco Bappa</title>
        <link rel="shortcut icon" href="">
        <!--STYLESHEET-->
        <!--=================================================-->
        <!--Roboto Slab Font [ OPTIONAL ] -->


        <!-- <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.bootstrap4.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.colVis.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/keytable/2.5.0/js/dataTables.keyTable.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.2.2/js/dataTables.responsive.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.2.2/js/responsive.bootstrap4.min.js"></script>
        <script src="{{asset ('js\toaster.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/notify.js')}}"></script> -->

        <script src="{{asset('js\jquery-2.1.1.min.js')}}"></script>
        <!-- <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css"></script> -->

         <link href="{{asset('plugins\datatables\extensions\Responsive\css\dataTables.responsive.css')}}" rel="stylesheet">
       <link href="{{asset('plugins\datatables\media\css\dataTables.bootstrap.css')}}" rel="stylesheet">
       
       
        <link href="http://fonts.googleapis.com/css?family=Roboto+Slab:400,300,100,700" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Roboto:500,400italic,100,700italic,300,700,500italic,400" rel="stylesheet">
        <!--Bootstrap Stylesheet [ REQUIRED ]-->
        <link href="{{asset('css\bootstrap.min.css')}}" rel="stylesheet">
        <!--Jasmine Stylesheet [ REQUIRED ]-->
        <link href="{{asset('css\style.css')}}" rel="stylesheet">
        <!--Font Awesome [ OPTIONAL ]-->
        <link href="{{asset('plugins\font-awesome\css\font-awesome.min.css')}}" rel="stylesheet">
        <!--Switchery [ OPTIONAL ]-->
        <link href="{{asset('plugins\switchery\switchery.min.css')}}" rel="stylesheet">
        <!--Bootstrap Select [ OPTIONAL ]-->
        <link href="{{asset('plugins\bootstrap-select\bootstrap-select.min.css')}}" rel="stylesheet">
        <!--Demo [ DEMONSTRATION ]-->
        <link href="{{asset('css\demo\jasmine.css')}}" rel="stylesheet">
        <!--SCRIPT-->
        <!--=================================================-->
        <!--Page Load Progress Bar [ OPTIONAL ]-->
        <link href="{{asset('plugins\pace\pace.min.css')}}" rel="stylesheet">
        <script src="{{asset('plugins\pace\pace.min.js')}}"></script>

        <script src="{{asset('plugins\datatables\media\js\jquery.dataTables.js')}}"></script>
        <script src="{{asset('plugins\datatables\media\js\dataTables.bootstrap.js')}}"></script>
        <script src="{{asset('plugins\datatables\extensions\Responsive\js\dataTables.responsive.min.js')}}"></script>
        <!--Fullscreen jQuery [ OPTIONAL ]-->
        <script src="{{asset('plugins\screenfull\screenfull.js')}}"></script>
        <!--DataTables Sample [ SAMPLE ]-->
        <script src="{{asset('js\demo\tables-datatables.js')}}"></script>
        <style type="text/css">
            @media print {
               .noPrint{
              display:none;
                }
}

        </style>
    </head>
    <body>
          @include('backend_layouts.header')
          @include('backend_layouts.sidebar')
          
  <!-- /Navigation-->
  

        <div id="container" class="effect mainnav-full" >
              @yield('content')
                    @include('backend_layouts.footer')
            <!--NAVBAR-->
            <!--===================================================-->
            
            <!--===================================================-->
            <!--END NAVBAR-->
           
                <!--END RIGHT CHAT MESSANGER--> 
                <!--===================================================-->
            </div>
            <!-- FOOTER -->
            <!--===================================================-->
           
            <!--===================================================-->
            <!-- END FOOTER -->
            <!-- SCROLL TOP BUTTON -->
            <!--===================================================-->
            <button id="scroll-top" class="btn"><i class="fa fa-chevron-up"></i></button>
            <!--===================================================-->
        </div>
        <!--===================================================-->
        <!-- END OF CONTAINER -->
        <!--JAVASCRIPT-->
        <!--=================================================-->
        <!--jQuery [ REQUIRED ]-->
        
        <!--BootstrapJS [ RECOMMENDED ]-->
        <script src="{{asset('js\bootstrap.min.js')}}"></script>
        <!--Fast Click [ OPTIONAL ]-->
        <script src="{{asset('plugins\fast-click\fastclick.min.js')}}"></script>
        <!--Jquery Nano Scroller js [ REQUIRED ]-->
        <script src="{{asset('plugins\nanoscrollerjs\jquery.nanoscroller.min.js')}}"></script>
        <!--Metismenu js [ REQUIRED ]-->
        <script src="{{asset('plugins\metismenu\metismenu.min.js')}}"></script>
        <!--Jasmine Admin [ RECOMMENDED ]-->
        <script src="{{asset('js\scripts.js')}}"></script>
        <!--Switchery [ OPTIONAL ]-->
        <script src="{{asset('plugins\switchery\switchery.min.js')}}"></script>
        <!--Jquery Steps [ OPTIONAL ]-->
        <script src="{{asset('plugins\parsley\parsley.min.js')}}"></script>
        <!--Jquery Steps [ OPTIONAL ]-->
        <script src="{{asset('plugins\jquery-steps\jquery-steps.min.js')}}"></script>
        <!--Bootstrap Select [ OPTIONAL ]-->
        <script src="{{asset('plugins\bootstrap-select\bootstrap-select.min.js')}}"></script>
        <!--Bootstrap Wizard [ OPTIONAL ]-->
        <script src="{{asset('plugins\bootstrap-wizard\jquery.bootstrap.wizard.min.js')}}"></script>
        <!--Masked Input [ OPTIONAL ]-->
        <script src="{{asset('plugins\masked-input\bootstrap-inputmask.min.js')}}"></script>
        <!--Bootstrap Validator [ OPTIONAL ]-->
        <script src="{{asset('plugins\bootstrap-validator\bootstrapValidator.min.js')}}"></script>
        <!--Flot Chart [ OPTIONAL ]-->
        <script src="{{asset('plugins\flot-charts\jquery.flot.min.js')}}"></script>
        <script src="{{asset('plugins\flot-charts\jquery.flot.resize.min.js')}}"></script>
        <script src="{{asset('plugins\flot-charts\jquery.flot.spline.js')}}"></script>
        <script src="{{asset('plugins\moment\moment.min.js')}}"></script>
        <script src="{{asset('plugins\moment-range\moment-range.js')}}"></script>
        <script src="{{asset('plugins\flot-charts\jquery.flot.tooltip.min.js')}}"></script>
        <!--Flot Order Bars Chart [ OPTIONAL ]-->
        <script src="{{asset('plugins\flot-charts\jquery.flot.categories.js')}}"></script>
        <!--Morris.js [ OPTIONAL ]-->
        <script src="{{asset('plugins\morris-js\morris.min.j')}}s"></script>
        <script src="{{asset('plugins\morris-js\raphael-js\raphael.min.js')}}"></script>        
        <!--Easy Pie Chart [ OPTIONAL ]-->
        <script src="{{asset('plugins\easy-pie-chart\jquery.easypiechart.min.js')}}"></script>
        <!--Fullscreen jQuery [ OPTIONAL ]-->
        <script src="{{asset('plugins\screenfull\screenfull.js')}}"></script>
        <!--Form Wizard [ SAMPLE ]-->
        <script src="{{asset('js\demo\index.js')}}"></script>
        <!--Form Wizard [ SAMPLE ]-->
        <script src="{{asset('js\demo\wizard.js')}}"></script>
        <!--Form Wizard [ SAMPLE ]-->
        <script src="{{asset('js\demo\form-wizard.js')}}"></script>
    </body>
</html>