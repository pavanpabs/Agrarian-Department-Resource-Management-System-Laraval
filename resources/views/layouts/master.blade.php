<!doctype html>
<html lang="en">
   
<head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <link rel="icon" href={{asset('images/favicon.png')}}>
      <title>Agro - ADRMS</title>
      <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
      <!-- CSS FILES START -->
      <link href={{asset('css/custom.css')}} rel="stylesheet">
      <link href={{asset('css/color.css')}} rel="stylesheet">
      <link href={{asset('css/responsive.css')}} rel="stylesheet">
      <link href={{asset('css/owl.carousel.min.css')}} rel="stylesheet">
      <link href={{asset('css/bootstrap.min.css')}} rel="stylesheet">
      <link href={{asset('css/prettyPhoto.css')}} rel="stylesheet">
      <link href={{asset('css/all.min.css')}} rel="stylesheet">
      <link href={{asset('css/font_awesome_all.css')}} rel="stylesheet">
      <link rel="stylesheet" href="assets/css/adminlte.min.css"> 
     <!-- DataTables -->
    <link rel="stylesheet" href="assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

      <!-- CSS FILES End -->
   </head>
   <!-- @extends('layouts.app') -->
   <body>    
      <script src={{asset('js/jquery-3.3.1.min.js')}}></script> 
      <script src={{asset('js/jquery-migrate-1.4.1.min.js')}}></script> 
      <script src={{asset('js/popper.min.js')}}></script> 
      <script src={{asset('js/bootstrap.min.js')}}></script> 
      <script src={{asset('js/owl.carousel.min.js')}}></script> 
      <script src={{asset('js/jquery.prettyPhoto.js')}}></script> 
      <script src={{asset('js/isotope.min.js')}}></script> 
      <script src={{asset('js/custom.js')}}></script>
      <script src={{asset('js/font_awesome_all.js')}}></script>
      <!-- DataTables  & Plugins -->
      <script src="assets/plugins/jquery/jquery.min.js"></script>
      <script src="assets/plugins/bootstrap/js/bootstrap.bundle.js"></script>
      <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
      <script src="assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
      <script src="assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
      <script src="assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
      <script src="assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
      <script src="assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
      <script src="assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
      <script src="assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
      <script src="assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<content>
      @yield('content')
      </content>

      </body>
</html>

     
