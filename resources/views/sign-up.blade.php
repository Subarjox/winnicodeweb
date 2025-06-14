<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../media/logo.png">
  <link rel="icon" type="image/png" href="../media/logo.png">
  <title>
    Winnicode News
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700,800" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="https://demos.creative-tim.com/soft-ui-dashboard/assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="https://demos.creative-tim.com/soft-ui-dashboard/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/soft-ui-dashboard.css?v=1.1.0" rel="stylesheet" />

</head>

<body class="">
 
  <main class="main-content  mt-0">
    <section class="min-vh-100 mb-8">
      <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg" style="background-image: url('../assets/img/jurnalist.jpg');">
        <span class="mask bg-gradient-primary opacity-5 "></span>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-5 text-center mx-auto">
              <h3 class="text-white mb-2 mt-5">Selamat Datang ! Jurnalis Baru</h1>
              <p class="text-lead text-white"></p>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row mt-lg-n10 mt-md-n11 mt-n10">
          <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
            <div class="card z-index-0">
              <div class="card-header text-center pt-4">
                <h5 class="text-primary font-weight-bolder">Daftar </h5>
              </div>
              <div class="card-body">
                <form role="form text-left" method="POST" action="/register">
                  @csrf
                  <div class="mb-2">
                    <label class="form-label">Username</label>
                    <input
                      type="text"
                      name="name"
                      class="form-control"
                      placeholder="Username"
                      aria-label="Nama"
                      aria-describedby="email-addon"
                      required
                    >
                  </div>
                  <div class="mb-2">
                    <label class="form-label">Email</label>
                    <input
                      type="email"
                      name="email"
                      class="form-control"
                      placeholder="Email"
                      aria-label="Email"
                      aria-describedby="email-addon"
                      required
                    >
                  </div>
                  <div class="mb-2">
                    <label class="form-label">Password</label>
                    <input
                      type="password"
                      name="password"
                      class="form-control"
                      placeholder="Password"
                      aria-label="Password"
                      aria-describedby="password-addon"
                      required
                    >
                  </div>
                  <div class="mb-2 ">
                    <label class="form-label">Re-enter password</label>
                    <input
                      type="password"
                      name="password_confirmation"
                      class="form-control"
                      placeholder="konfirmasi Password"
                      aria-label="Confirm Password"
                      required
                    >
                  </div>
                  <div class="form-check form-check-info text-left">
                    <input
                      class="form-check-input"
                      type="checkbox"
                      name="terms"
                      id="flexCheckDefault"
                      value="1"
                      required
                    >
                    <label class="form-check-label" for="flexCheckDefault">
                      Saya setuju dengan <a href="https://winnicode.com/privasi-policy" class="text-primary font-weight-bolder">Syarat Dan Ketentuan</a>
                    </label>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">Daftar</button>
                  </div>
                  <p class="text-sm text-center mt-3 mb-0">
                    Sudah Punya Akun ? <a href="/login" class="text-primary font-weight-bolder"> Login</a>
                  </p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
   
    <x-footer></x-footer>

  </main>
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
  <script src="../assets/js/soft-ui-dashboard.min.js?v=1.1.0"></script>
</body>

</html>