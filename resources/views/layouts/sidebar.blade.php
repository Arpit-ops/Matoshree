<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>


.sidenav {
  height: 100%;
  width: 150px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #00001a;
  overflow-x: hidden;
  padding-top: 20px;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: #818181;
  display: block;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.main {
  margin-left: 160px; /* Same as the width of the sidenav */
  /* Increased text to enable scrolling */
  padding: 0px 10px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body>

<div class="sidenav noPrint" style="padding-top: 76px;"> 

  <a href="{{config('app.baseURL')}}/celebrity/all">Celebrity</a><br>
  <a href="{{config('app.baseURL')}}/booking/all">Booking</a><br>
  <a href="{{config('app.baseURL')}}/customer/all">Customer</a><br>


  <!-- <a href="{{config('app.baseURL')}}/wallet/all">Wallet Request</a><br> -->
</div>

<div class="main">
