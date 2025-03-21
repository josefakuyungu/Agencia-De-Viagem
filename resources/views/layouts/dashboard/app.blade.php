
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons 
  <link href="dashboard/img/favicon.png" rel="icon"> 
  <link href="dashboard/img/apple-touch-icon.png" rel="apple-touch-icon">
-->

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <livewire:styles />

  <!-- Vendor CSS Files -->
  <link href="{{asset('dashboard/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href='{{asset("dashboard/vendor/bootstrap-icons/bootstrap-icons.css")}}' rel="stylesheet">
  <link href="{{asset("dashboard/vendor/boxicons/css/boxicons.min.css")}}" rel="stylesheet">
  <link href="{{asset("dashboard/vendor/quill/quill.snow.css")}}" rel="stylesheet">
  <link href="{{asset("dashboard/vendor/quill/quill.bubble.css")}}" rel="stylesheet">
  <link href="{{asset("dashboard/vendor/remixicon/remixicon.css")}}" rel="stylesheet">
  <link href="{{asset("dashboard/vendor/simple-datatables/style.css")}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('dashboard/css/style.css')}}" rel="stylesheet">

  

</head>



<body>

{{$slot}}
<livewire:scripts />

    <footer id="footer" class="footer">
        <div class="copyright">
          &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </footer><!-- End Footer -->
    
      <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    
      <!-- Vendor JS Files -->
      <script src="{{asset("dashboard/vendor/apexcharts/apexcharts.min.js")}}"></script>
      <script src="{{asset("dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
      <script src="{{asset("dashboard/vendor/chart.js/chart.umd.js")}}"></script>
      <script src="{{asset("dashboard/vendor/echarts/echarts.min.js")}}"></script>
      <script src="{{asset("dashboard/vendor/quill/quill.js")}}"></script>
      <script src="{{asset("dashboard/vendor/simple-datatables/simple-datatables.js")}}"></script>
      <script src="{{asset("dashboard/vendor/tinymce/tinymce.min.js")}}"></script>
      <script src="{{asset("dashboard/vendor/php-email-form/validate.js")}}"></script>
    
      <!-- Template Main JS File -->
      <script src="{{asset("dashboard/js/main.js")}}"></script>
    
    </body>
    
    </html>