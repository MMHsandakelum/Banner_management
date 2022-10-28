{{-- <!DOCTYPE html>
<html lang="en">
@include ('layout.header')

<body class="g-sidenav-show   bg-gray-100">
    <div class="min-height-300 bg-primary position-absolute w-100"></div>
    @include ('layout.sidenav')
    <main class="main-content position-relative border-radius-lg ">
        @include ('layout.navbar')


        <div class="container-fluid py-4">
            @include ('layout.cards')
            @include ('layout.profile')

        </div>
    </main>


    @include ('layout.footer')
</body>

</html> --}}
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Show Banner
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
</head>

<body class="pagebody">
  <div class="row">
    <div class="card card-profile">
      <img src="{{ asset('assets/img/banners/'.$banner->img_path)}}">
        <div class="card-body">
          <div class="text-left">
            <h5>
              Title : {!! $banner->title !!}
            </h5>
            <div class="h6 font-weight-300">
              Linked Website : {!! $banner->website !!}
            </div>
            <div class="h6">
              Email : {!! $banner->email !!}
            </div>
            <div>
              Description : {!! $banner->description !!}
            </div>
          </div>
          <div class="bannerlistbtn">
            <a class="btn btn-primary" href="/banners" role="button">Back To List</a>
          </div>
        </div>
    </div>
    <div class="updateform">
      @include ('layout.updateform')
    </div>
  </div>
  
  
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/argon-dashboard.min.js?v=2.0.4"></script>
</body>

</html>