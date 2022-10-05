
<!DOCTYPE html>
<html lang="en">
  <link rel="stylesheet" href="css/bootstrap.min.css">
<!--Head-->
@include('inc.head')

<body>

  <!-- ======= Header ======= -->

   @include('inc.header')

  <!-- ======= Hero Section ======= -->
  

  
  @include('inc.banner')
   @yield('content')
  <!-- End #main -->

  <!-- ======= Footer ======= -->
   @include('inc.footer')
   
   

  <!-- Vendor JS Files -->
   @include('inc.scripts')
</body>

</html>