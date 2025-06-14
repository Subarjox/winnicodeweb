<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../media/logo.png">
  <link rel="icon" type="image/png" href="../media/logo.png">
  <title>
    Winnicode News | Dashboard
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

<body class="g-sidenav-show  bg-gray-100">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-2 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="https://winnicode.com/">
        <img src="../media/logo.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold">Winnicode Garuda</span>
      </a>
    </div>
    <hr class="horizontal dark mt-2">
    <div class="collapse navbar-collapse w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">

        <li class="nav-item mt-2 mb-2">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Journalis Menu</h6>
        </li>

        
        <li class="nav-item">
          <a class="nav-link  active" href="/jurnalis/dashboard">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#000000"><path d="M264-216h96v-240h240v240h96v-348L480-726 264-564v348Zm-72 72v-456l288-216 288 216v456H528v-240h-96v240H192Zm288-327Z"/></svg>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link  " href="/jurnalis/newslist">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#000000"><path d="M216-144q-29.7 0-50.85-21.15Q144-186.3 144-216v-528q0-29.7 21.15-50.85Q186.3-816 216-816h171q8-31 33.5-51.5T480-888q34 0 59.5 20.5T573-816h171q29.7 0 50.85 21.15Q816-773.7 816-744v528q0 29.7-21.15 50.85Q773.7-144 744-144H216Zm0-72h528v-528H216v528Zm72-72h288v-72H288v72Zm0-156h384v-72H288v72Zm0-156h384v-72H288v72Zm192-168q10.4 0 17.2-6.8 6.8-6.8 6.8-17.2 0-10.4-6.8-17.2-6.8-6.8-17.2-6.8-10.4 0-17.2 6.8-6.8 6.8-6.8 17.2 0 10.4 6.8 17.2 6.8 6.8 17.2 6.8ZM216-216v-528 528Z"/></svg>
            </div>
            <span class="nav-link-text ms-1">Newslist</span>
          </a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link  " href="/jurnalis/tulis">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#000000"><path d="M200-200h57l391-391-57-57-391 391v57Zm-80 80v-170l528-527q12-11 26.5-17t30.5-6q16 0 31 6t26 18l55 56q12 11 17.5 26t5.5 30q0 16-5.5 30.5T817-647L290-120H120Zm640-584-56-56 56 56Zm-141 85-28-29 57 57-29-28Z"/></svg>
            </div>
            <span class="nav-link-text ms-1">Write</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link " href="/logout">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#000000"><path d="M216-144q-29.7 0-50.85-21.15Q144-186.3 144-216v-528q0-29.7 21.15-50.85Q186.3-816 216-816h264v72H216v528h264v72H216Zm432-168-51-51 81-81H384v-72h294l-81-81 51-51 168 168-168 168Z"/></svg>
            </div>
            <span class="nav-link-text ms-1">Logout</span>
          </a>
        </li>

      </ul>
    </div>
  </aside>


  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <x-jurnavbar :username="$username" page="dashboard" />
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-lg-6 col-12">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
              <div class="card">
                <span class="mask bg-primary opacity-10 border-radius-lg"></span>
                <div class="card-body p-3 position-relative">
                  <div class="row">
                    <div class="col-8 text-start">
                      <div class="icon icon-shape bg-white shadow text-center border-radius-2xl">
                        <i class="ni ni-circle-08 text-dark text-gradient text-lg opacity-10" aria-hidden="true"></i>
                      </div>
                      <h5 class="text-white font-weight-bolder mb-0 mt-3">
                        {{ $jumlahBerita }}
                      </h5>
                      <span class="text-white text-sm">Total Berita</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-6 col-md-6 col-12 mt-4 mt-md-0">
              <div class="card">
                <span class="mask bg-info opacity-10 border-radius-lg"></span>
                <div class="card-body p-3 position-relative">
                  <div class="row">
                    <div class="col-8 text-start">
                      <div class="icon icon-shape bg-white shadow text-center border-radius-2xl">
                        <i class="ni ni-active-40 text-dark text-gradient text-lg opacity-10" aria-hidden="true"></i>
                      </div>
                      <h5 class="text-white font-weight-bolder mb-0 mt-3">
                        {{ $totalViews }}
                      </h5>
                      <span class="text-white text-sm">Total Views</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row mt-4">
            <div class="col-lg-6 col-md-6 col-12">
              <div class="card">
                <span class="mask bg-success opacity-10 border-radius-lg"></span>
                <div class="card-body p-3 position-relative">
                  <div class="row">
                    <div class="col-8 text-start">
                      <div class="icon icon-shape bg-white shadow text-center border-radius-2xl">
                        <i class="ni ni-cart text-dark text-gradient text-lg opacity-10" aria-hidden="true"></i>
                      </div>
                      <h5 class="text-white font-weight-bolder mb-0 mt-3">
                       {{ $totalLikes }} 
                      </h5>
                      <span class="text-white text-sm">Total Likes</span>
                    </div> 
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-6 col-md-6 col-12 mt-4 mt-md-0">
              <div class="card">
                <span class="mask bg-danger opacity-10 border-radius-lg"></span>
                <div class="card-body p-3 position-relative">
                  <div class="row">
                    <div class="col-8 text-start">
                      <div class="icon icon-shape bg-white shadow text-center border-radius-2xl">
                        <i class="ni ni-like-2 text-dark text-gradient text-lg opacity-10" aria-hidden="true"></i>
                      </div>
                      <h5 class="text-white font-weight-bolder mb-0 mt-3">
                       {{ $totalDislikes }}
                      </h5>
                      <span class="text-white text-sm">Total Dislikes</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
@php
    $total = $totalLikes + $totalDislikes;

    if ($total > 0) {
        $likeRatio = round(($totalLikes / $total) * 100);
        $likeRatioRounded = round($likeRatio / 5) * 5; // dibulatkan ke kelipatan 5
        $likeRatioRounded = max(5, min($likeRatioRounded, 100)); // jaga di antara 5 - 100
    } else {
        $likeRatio = null;
    }

@endphp

        <div class="col-lg-6 col-12 mt-4 mt-lg-0">
          <div class="card shadow h-100">
            <div class="card-header pb-0 p-3">
              <h6 class="mb-0">Reviews</h6>
            </div>
            <div class="card-body pb-0 p-3">
              <ul class="list-group">
                <li class="list-group-item border-0 d-flex align-items-center px-0 mb-0">
    <div class="w-100">
        <p class="text-sm font-weight-bold mb-1 mt-lg-0">Rasio Like / Dislike</p>

        @if($likeRatio !== null)
            <div class="d-flex justify-content-between flex-wrap align-items-center mb-2">
                <div class="d-flex align-items-center">
                    <span class="me-2 text-sm font-weight-bold text-dark">Like</span>
                    <span class="me-2 text-sm font-weight-bold text-success">{{ $totalLikes }}</span>
                </div>
                <div class="d-flex align-items-center">
                    <span class="me-2 text-sm font-weight-bold text-dark">Dislike</span>
                    <span class="text-sm font-weight-bold text-danger">{{ $totalDislikes }}</span>
                </div>
            </div>

            <div>
                <div class="progress progress-md bg-danger">
                    <div 
                        class="progress-bar bg-success w-{{ $likeRatioRounded }}" 
                        role="progressbar" 
                        aria-valuenow="{{ $likeRatioRounded }}" 
                        aria-valuemin="0" 
                        aria-valuemax="100"
                    >
                    </div>
                </div>
            </div>
        @else
            <div class="text-sm text-muted mt-2">
                Kamu belum memiliki like atau dislike.
            </div>
        @endif
    </div>
</li>


@php
    if ($totalViews > 0 && $totalLikes > 0) {
        $viewstolike = round(($totalLikes / $totalViews) * 100);
        $viewstolikerounded = round($viewstolike / 5) * 5;
        $viewstolikerounded = max(5, min($viewstolikerounded, 100));
    } else {
        $viewstolike = null;
    }
@endphp

        <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
          <div class="w-100">
            <p class="text-sm font-weight-bold mb-1 mt-2">Rasio views & Like</p>

            @if($viewstolike !== null)
                <div class="d-flex mb-2">
                  <span class="me-2 text-sm font-weight-bold text-dark">Viewer yang memberi like</span>
                  <span class="ms-auto text-sm font-weight-bold">{{ $viewstolike }}%</span>
                </div>
                <div>
                  <div class="progress progress-md">
                    <div 
                      class="progress-bar bg-info w-{{ $viewstolikerounded }}" 
                      role="progressbar" 
                      aria-valuenow="{{ $viewstolikerounded }}" 
                      aria-valuemin="0" 
                      aria-valuemax="100">
                    </div>
                  </div>
                </div>
            @else
                <div class="text-sm text-muted mt-2">
                    Kamu belum memiliki views atau like.
                </div>
            @endif

          </div>
        </li>
                
              </ul>
            </div>
            <div class="card-footer pt-0 p-3 d-flex align-items-center">
              <div class="w-100">
                <p class="text-sm">
                  Kamu memiliki like terbanyak sebanyak <b>{{ $MaxLikes }}</b>. Dan dengan view sebanyak <b>{{ $MaxViews }}</b>. Dari semua berita yang kamu publikasi
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row my-4">
        <div class="col-lg-12 col-md-6 mb-md-0 mb-4">
          <div class="card">
            <div class="card-header pb-0">
              <div class="row">
                <div class="col-lg-6 col-7">
                  <h6>Overview Berita</h6>
                  <p class="text-sm mb-0">
                    <i class="fa fa-check text-info" aria-hidden="true"></i>
                    Total ada <b>{{ $jumlahBerita }}</b> berita yang telah anda tulis 
                  </p>
                </div>
                <div class="col-lg-6 col-5 my-auto text-end">
                  <div class="dropdown float-lg-end pe-4">
                    <a class="cursor-pointer" id="dropdownTable" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="fa fa-ellipsis-v text-secondary"></i>
                    </a>
                    <ul class="dropdown-menu px-2 py-3 ms-sm-n4 ms-n5" aria-labelledby="dropdownTable">
                      <li><a class="dropdown-item border-radius-md" href="/jurnalis/newslist">Kelola</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Judul</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ">Views</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Likes</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Dislikes</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($beritas as $berita )
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="{{ asset('storage/' . $berita->gambar) }}" class="avatar avatar-sm me-3" alt="xd">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{ $berita->judul }}</h6>
                          </div>
                        </div>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="text-xs font-weight-bold text-info">{{ $berita->views }}  </span>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="text-xs font-weight-bold text-success">{{ $berita->likes }} </span>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="text-xs font-weight-bold text-danger">{{ $berita->dislikes}}</span>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <x-footer></x-footer>
  </main>

 
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/chartjs.min.js"></script>
 
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/soft-ui-dashboard.min.js?v=1.1.0"></script>
</body>

</html>