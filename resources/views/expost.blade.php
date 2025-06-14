<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="apple-touch-icon" sizes="76x76" href="../media/logo.png">
  <link rel="icon" type="image/png" href="../media/logo.png">
  <title>
    Winnicode News
  </title> 
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700,800" rel="stylesheet" />
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
        
        <li class="nav-item">
          <a class="nav-link " href="/dashboard">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 20 20" height="20px" viewBox="0 0 20 20" width="20px" fill="#000000"><rect fill="none" height="20" width="20"/><path d="M17.85,8.5h-1.54c-0.48-2.03-1.93-3.68-3.82-4.48V4.5C12.5,5.33,11.83,6,11,6H9v1c0,0.55-0.45,1-1,1H7v2h1v2H7L3.64,8.64 C3.55,9.08,3.5,9.53,3.5,10c0,3.58,2.92,6.5,6.5,6.5V18c-4.42,0-8-3.58-8-8s3.58-8,8-8C13.91,2,17.15,4.8,17.85,8.5z M18,16.44 l-1.06,1.06l-2.56-2.56c-0.54,0.35-1.19,0.56-1.88,0.56C10.57,15.5,9,13.93,9,12s1.57-3.5,3.5-3.5S16,10.07,16,12 c0,0.69-0.21,1.34-0.56,1.88L18,16.44z M14.5,12c0-1.1-0.9-2-2-2s-2,0.9-2,2s0.9,2,2,2S14.5,13.1,14.5,12z"/></svg>
            </div>
            <span class="nav-link-text ms-1">Explore</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link  " href="/ekslusif">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="16px" fill="#000000"><path d="M0 0h24v24H0z" fill="none"/><path d="M18 7l-1.41-1.41-6.34 6.34 1.41 1.41L18 7zm4.24-1.41L11.66 16.17 7.48 12l-1.41 1.41L11.66 19l12-12-1.42-1.41zM.41 13.41L6 19l1.41-1.41L1.83 12 .41 13.41z"/></svg>
            </div>
            <span class="nav-link-text ms-1">Exclusive News</span>
          </a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link  " href="/search">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 0 24 24" width="20px" fill="#000000"><path d="M0 0h24v24H0z" fill="none"/><path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/></svg>
                <title>Search News</title>
              </svg>
            </div>
            <span class="nav-link-text ms-1">Search News</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link  " href="/subscribe">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 0 24 24" width="16px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M10.01 21.01c0 1.1.89 1.99 1.99 1.99s1.99-.89 1.99-1.99h-3.98zm8.87-4.19V11c0-3.25-2.25-5.97-5.29-6.69v-.72C13.59 2.71 12.88 2 12 2s-1.59.71-1.59 1.59v.72C7.37 5.03 5.12 7.75 5.12 11v5.82L3 18.94V20h18v-1.06l-2.12-2.12zM16 13.01h-3v3h-2v-3H8V11h3V8h2v3h3v2.01z"/></svg>
            </div>
            <span class="nav-link-text ms-1">Subscribe</span>
          </a>
        </li>
        
        <li class="nav-item mt-4">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Tertarik jadi jurnalis kami?</h6>
        </li>


        <li class="nav-item">
          <a class="nav-link  " href="/sign-in">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 20 20" height="20px" viewBox="0 0 20 20" width="20px" fill="#000000"><g><rect fill="none" height="20" width="20"/></g><g><path d="M6.47,10.67c0.1-0.24,1.26-3,3.02-4.76c3.86-3.86,7.08-3.56,7.95-3.36c0.2,0.88,0.5,4.09-3.36,7.95 c-1.76,1.76-4.52,2.92-4.76,3.02L6.47,10.67z M12.5,9C13.32,9,14,8.33,14,7.5S13.33,6,12.5,6C11.68,6,11,6.67,11,7.5 S11.67,9,12.5,9z M7.04,5.29c-0.46-0.06-0.92,0.1-1.25,0.43L2.25,9.27l3.28,1.09c0.48-1.18,1.53-3.29,3-4.88L7.04,5.29z M14.71,12.96c0.06,0.46-0.1,0.92-0.43,1.25l-3.55,3.55l-1.09-3.28c1.18-0.48,3.29-1.53,4.88-3L14.71,12.96z M5.25,12.5 c-0.62,0-1.18,0.25-1.59,0.66C2.44,14.38,2,18,2,18s3.62-0.44,4.84-1.66c0.41-0.41,0.66-0.97,0.66-1.59 C7.5,13.51,6.49,12.5,5.25,12.5z"/></g></svg>
            </div>
            <span class="nav-link-text ms-1">Daftar</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link  " href="/sign-in">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 20 20" height="20px" viewBox="0 0 20 20" width="20px" fill="#000000"><g><rect fill="none" height="20" width="20"/></g><g><path d="M6.47,10.67c0.1-0.24,1.26-3,3.02-4.76c3.86-3.86,7.08-3.56,7.95-3.36c0.2,0.88,0.5,4.09-3.36,7.95 c-1.76,1.76-4.52,2.92-4.76,3.02L6.47,10.67z M12.5,9C13.32,9,14,8.33,14,7.5S13.33,6,12.5,6C11.68,6,11,6.67,11,7.5 S11.67,9,12.5,9z M7.04,5.29c-0.46-0.06-0.92,0.1-1.25,0.43L2.25,9.27l3.28,1.09c0.48-1.18,1.53-3.29,3-4.88L7.04,5.29z M14.71,12.96c0.06,0.46-0.1,0.92-0.43,1.25l-3.55,3.55l-1.09-3.28c1.18-0.48,3.29-1.53,4.88-3L14.71,12.96z M5.25,12.5 c-0.62,0-1.18,0.25-1.59,0.66C2.44,14.38,2,18,2,18s3.62-0.44,4.84-1.66c0.41-0.41,0.66-0.97,0.66-1.59 C7.5,13.51,6.49,12.5,5.25,12.5z"/></g></svg>
            </div>
            <span class="nav-link-text ms-1">Login</span>
          </a>
        </li>

      </ul>
    </div>
  </aside>


  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl position-sticky blur shadow-blur mt-4 left-auto top-1 z-index-sticky" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Winnicode News</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">News</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center"> </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item dropdown pe-2 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none">Halo, User </span>
              </a>
              <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="../assets/img/team-2.jpg" class="avatar avatar-sm  me-3 ">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">New message</span> from Laur
                        </h6>
                        <p class="text-xs text-secondary mb-0 ">
                          <i class="fa fa-clock me-1"></i>
                          13 minutes ago
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="../assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm bg-gradient-dark  me-3 ">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">New album</span> by Travis Scott
                        </h6>
                        <p class="text-xs text-secondary mb-0 ">
                          <i class="fa fa-clock me-1"></i>
                          1 day
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                        <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                          <title>credit-card</title>
                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                              <g transform="translate(1716.000000, 291.000000)">
                                <g transform="translate(453.000000, 454.000000)">
                                  <path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" opacity="0.593633743"></path>
                                  <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                                </g>
                              </g>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          Payment successfully completed
                        </h6>
                        <p class="text-xs text-secondary mb-0 ">
                          <i class="fa fa-clock me-1"></i>
                          2 days
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item d-xl-none px-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->

    <div class="container-fluid py-2">
      <div class="row">

      <!-- Berita-->
      <div class="row mt-4">
        <div class="col-lg-12 mb-lg-0 mb-4">
          <div class="card">
            <div class="card-body p-4">
              <div class="row">

                <div class="col-12 text-center">
                    <div class="position-relative d-flex align-items-center justify-content-center h-auto overflow-hidden border-radius-lg">
                      <img class="w-65 h-auto" src="{{ asset('storage/uploads/' . basename($berita->gambar)) }}" alt="link">
                    </div>
                  </div>

                <div class="col-lg-12 mt-2">
                  <div class="d-flex flex-column h-50">

                      <p class="align-middle  text-sm">
                        <span class="badge badge-sm bg-gradient-success opacity-9">{{ $berita->kategori }}</span>
                      </p>

                    <div class="row"> 
                        <div class="col-6">
                      <p class="align-middle  text-sm">
                        <span class="">penulis,</span>
                        <span class="">{{$berita->created_at  }}
                        </span>
                      </p>
                        </div>
                    </div>

                    <h5 class="font-weight-bolder mb-4">{{$berita->judul }}</h5>
                    <p class="mb-5 opacity-10">{{ $berita->deskripsi }}
                    </p>
                  </div>
                </div>
    
               <!-- Mulai komponen -->
                  <div class="row mt-4 text-center">
                    <!-- VIEW -->
                    <div class="col-4">
                      <p class="mb-1 text-secondary text-xs">Viewers</p>
                      <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#008ddc"><path d="M480-320q75 0 127.5-52.5T660-500q0-75-52.5-127.5T480-680q-75 0-127.5 52.5T300-500q0 75 52.5 127.5T480-320Zm0-72q-45 0-76.5-31.5T372-500q0-45 31.5-76.5T480-608q45 0 76.5 31.5T588-500q0 45-31.5 76.5T480-392Zm0 192q-146 0-266-81.5T40-500q54-137 174-218.5T480-800q146 0 266 81.5T920-500q-54 137-174 218.5T480-200Zm0-300Zm0 220q113 0 207.5-59.5T832-500q-50-101-144.5-160.5T480-720q-113 0-207.5 59.5T128-500q50 101 144.5 160.5T480-280Z"/></svg>
                      <p id="viewercount" class="mt-1 text-secondary text-info">{{ $berita->views }}</p>
                    </div>

                    <!-- LIKE -->
                    <div class="col-4">
                      <p class="mb-1 text-secondary text-xs">Likes</p>
                      <button id="likeBtn" class="btn-icon border-0 bg-transparent">
                        <svg id="likeIcon" xmlns="http://www.w3.org/2000/svg" height="28px" viewBox="0 -960 960 960" width="28px" class="text-secondary"  fill="#000000">
                          <path d="M720-120H280v-520l280-280 50 50q7 7 11.5 19t4.5 23v14l-44 174h258q32 0 56 24t24 56v80q0 7-2 15t-4 15L794-168q-9 20-30 34t-44 14Zm-360-80h360l120-280v-80H480l54-220-174 174v406Zm0-406v406-406Zm-80-34v80H160v360h120v80H80v-520h200Z"/>
                        </svg>
                        <p id="likeCount" class="mt-1 text-secondary">{{ $berita->likes }}</p>
                      </button>
                    </div>

                    <!-- DISLIKE -->
                    <div class="col-4">
                      <p class="mb-1 text-secondary text-xs">Dislikes</p>
                      <button id="dislikeBtn" class="btn-icon border-0 bg-transparent">
                        <svg id="dislikeIcon" xmlns="http://www.w3.org/2000/svg" height="28px" viewBox="0 -960 960 960" width="28px" class="text-secondary" fill="#000000">
                          <path d="M240-840h440v520L400-40l-50-50q-7-7-11.5-19t-4.5-23v-14l44-174H120q-32 0-56-24t-24-56v-80q0-7 2-15t4-15l120-282q9-20 30-34t44-14Zm360 80H240L120-480v80h360l-54 220 174-174v-406Zm0 406v-406 406Zm80 34v-80h120v-360H680v-80h200v520H680Z"/>
                        </svg> 
                        <p id="dislikeCount" class="mt-1 text-secondary">{{ $berita->dislikes }}</p>
                      </button>
                    </div>
                  </div>


                </div>
                


              </div>
            </div>
          </div>
        </div>
      </div>  

      <!-- Berita Baru -->
<div class="container-fluid py-2 px-4">
  <div class="row mt-6">
    <div class="col-12">
      <h4 class="font-weight-bolder mb-4">Baca Berita Menarik Selanjutnya</h4>
    </div>
  </div>

  <div class="row">
 @foreach ($beritaNext as $item)
 <div class="col-lg-4 mb-4">
   <div class="card h-100 p-2 bg-transparent shadow-xl">
     <div class="overflow-hidden position-relative border-radius-xl bg-cover h-100"
     style="background-image: url('{{ asset('storage/uploads/' . basename($item->gambar)) }}');">
     <span class="mask bg-gradient-dark"></span>
     <div class="card-body position-relative z-index-1 d-flex flex-column h-100 p-4">
       <h5 class="text-white font-weight-bolder mb-2 pt-2">{{ $item->judul }}</h5>
       <p class="align-middle  text-sm">
         <span class="badge badge-sm bg-gradient-info">kategori</span>
       </p>
       <a class="text-white text-sm font-weight-bold mt-auto icon-move-right" href="/expost/{{ $item->id_berita }}">
         Baca Selengkapnya... <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
       </a>
     </div>
   </div>
 </div>
</div>
   
 @endforeach
 

  </div>
</div>


    
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

  <script>
    let likeActive = false;
    let dislikeActive = false;
    
    const beritaId = {{ $berita->id_berita }};
    const likeBtn = document.getElementById('likeBtn');
    const dislikeBtn = document.getElementById('dislikeBtn');
    
    const likeIcon = document.getElementById('likeIcon');
    const dislikeIcon = document.getElementById('dislikeIcon');
    
    const likeCount = document.getElementById('likeCount');
    const dislikeCount = document.getElementById('dislikeCount');
    
    // Ambil status dari localStorage saat halaman dimuat
    document.addEventListener('DOMContentLoaded', () => {
      const savedStatus = JSON.parse(localStorage.getItem(`berita_${beritaId}_status`));
      if (savedStatus) {
        likeActive = savedStatus.likeActive;
        dislikeActive = savedStatus.dislikeActive;
    
        if (likeActive) {
          likeIcon.classList.replace('text-secondary', 'text-success');
          likeCount.classList.replace('text-secondary', 'text-success');
          likeIcon.setAttribute("fill", "#75FB4C");
        }
    
        if (dislikeActive) {
          dislikeIcon.classList.replace('text-secondary', 'text-danger');
          dislikeCount.classList.replace('text-secondary', 'text-danger');
          dislikeIcon.setAttribute("fill", "#EA3323");
        }
      }
    });
    
    // Simpan status ke localStorage
    function saveStatus() {
      localStorage.setItem(`berita_${beritaId}_status`, JSON.stringify({
        likeActive: likeActive,
        dislikeActive: dislikeActive
      }));
    }
    
    // Kirim update ke server
    function updateInteraction(action) {
      fetch('/berita/interact', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
          'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
        body: JSON.stringify({
          id_berita: beritaId,
          action: action
        })
      })
      .then(res => res.json())
      .then(data => {
        likeCount.textContent = data.likes;
        dislikeCount.textContent = data.dislikes;
      })
      .catch(err => console.error('Gagal mengirim data:', err));
    }
    
    // Event klik LIKE
    likeBtn.addEventListener('click', () => {
      if (!likeActive) {
        likeActive = true;
        likeIcon.classList.replace('text-secondary', 'text-success');
        likeCount.classList.replace('text-secondary', 'text-success');
        likeIcon.setAttribute("fill", "#75FB4C");
        updateInteraction('like');
    
        if (dislikeActive) {
          dislikeActive = false;
          dislikeIcon.classList.replace('text-danger', 'text-secondary');
          dislikeCount.classList.replace('text-danger', 'text-secondary');
          dislikeIcon.setAttribute("fill", "#000000");
          updateInteraction('undislike');
        }
      } else {
        likeActive = false;
        likeIcon.classList.replace('text-success', 'text-secondary');
        likeCount.classList.replace('text-success', 'text-secondary');
        likeIcon.setAttribute("fill", "#000000");
        updateInteraction('unlike');
      }
    
      saveStatus();
    });
    
    // Event klik DISLIKE
    dislikeBtn.addEventListener('click', () => {
      if (!dislikeActive) {
        dislikeActive = true;
        dislikeIcon.classList.replace('text-secondary', 'text-danger');
        dislikeCount.classList.replace('text-secondary', 'text-danger');
        dislikeIcon.setAttribute("fill", "#EA3323");
        updateInteraction('dislike');
    
        if (likeActive) {
          likeActive = false;
          likeIcon.classList.replace('text-success', 'text-secondary');
          likeCount.classList.replace('text-success', 'text-secondary');
          likeIcon.setAttribute("fill", "#000000");
          updateInteraction('unlike');
        }
      } else {
        dislikeActive = false;
        dislikeIcon.classList.replace('text-danger', 'text-secondary');
        dislikeCount.classList.replace('text-danger', 'text-secondary');
        dislikeIcon.setAttribute("fill", "#000000");
        updateInteraction('undislike');
      }
    
      saveStatus();
    });
    </script>
    
  
  
</body>

</html>