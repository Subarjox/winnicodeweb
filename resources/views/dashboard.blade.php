@php use Illuminate\Support\Str; @endphp

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
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
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
          <a class="nav-link active" href="/dashboard">
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
          <a class="nav-link  " href="/register">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 20 20" height="20px" viewBox="0 0 20 20" width="20px" fill="#000000"><g><rect fill="none" height="20" width="20"/></g><g><path d="M6.47,10.67c0.1-0.24,1.26-3,3.02-4.76c3.86-3.86,7.08-3.56,7.95-3.36c0.2,0.88,0.5,4.09-3.36,7.95 c-1.76,1.76-4.52,2.92-4.76,3.02L6.47,10.67z M12.5,9C13.32,9,14,8.33,14,7.5S13.33,6,12.5,6C11.68,6,11,6.67,11,7.5 S11.67,9,12.5,9z M7.04,5.29c-0.46-0.06-0.92,0.1-1.25,0.43L2.25,9.27l3.28,1.09c0.48-1.18,1.53-3.29,3-4.88L7.04,5.29z M14.71,12.96c0.06,0.46-0.1,0.92-0.43,1.25l-3.55,3.55l-1.09-3.28c1.18-0.48,3.29-1.53,4.88-3L14.71,12.96z M5.25,12.5 c-0.62,0-1.18,0.25-1.59,0.66C2.44,14.38,2,18,2,18s3.62-0.44,4.84-1.66c0.41-0.41,0.66-0.97,0.66-1.59 C7.5,13.51,6.49,12.5,5.25,12.5z"/></g></svg>
            </div>
            <span class="nav-link-text ms-1">Daftar</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link  " href="/login">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#000000"><path d="M480-120v-80h280v-560H480v-80h280q33 0 56.5 23.5T840-760v560q0 33-23.5 56.5T760-120H480Zm-80-160-55-58 102-102H120v-80h327L345-622l55-58 200 200-200 200Z"/></svg>
            </div>
            <span class="nav-link-text ms-1">Login</span>
          </a>
        </li>

      </ul>
    </div>
  </aside>


  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
  <x-navbar>Explore</x-navbar>

    <div class="container-fluid py-2">
      <div class="row">
        
      <!-- Berita Hot-->
      <div class="row mt-4">
        <div class="col-lg-12 mb-lg-0 mb-4">
          <div class="card">
            <div class="card-body p-4">
              <div class="row">
                <div class="col-lg-6">
                  <div class="d-flex flex-column h-100">
                    <h5 class="font-weight-bolder"> {{ $beritahot['judul'] }}</h5>
                    <p class="mb-5"> {{ Str::limit(strip_tags(html_entity_decode($beritahot['deskripsi'])), 150) }}
                    </p>
                    <p class="align-middle  text-sm">
                      <span class="badge badge-sm bg-gradient-success opacity-9"> {{ $beritahot['kategori'] }}</span>
                      </p>
                    <a class="text-body text-sm font-weight-bold mb-0 icon-move-right mt-auto" href="/post/{{ $beritahot ['id'] }}">
                      Baca Selengkapnya...
                      <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                    </a>
                  </div>
                </div>
                <div class="col-lg-5 ms-auto text-center mt-5 mt-lg-0">
                  <div class="position-relative d-flex align-items-center justify-content-center h-100 overflow-hidden border-radius-lg">
                    <img class="w-100 h-auto" src="https://drive.google.com/thumbnail?id={{ $beritahot['gambar'] }}" alt="link">
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
      <h4 class="font-weight-bolder mb-4">Berita Terbaru</h4>
    </div>
  </div>

  <div class="row">
    @foreach ($beritabaru as $index => $berita)
    <div class="col-lg-4 mb-4 berita-item {{ $index >= 7 ? 'd-none' : '' }}">
      <div class="card h-100 p-2 bg-transparent shadow-xl">
        <div class="overflow-hidden position-relative border-radius-xl bg-cover h-100 fixed"
          style="background-image: url('https://drive.google.com/thumbnail?id={{ $berita['gambar']   }}');">
          <span class="mask bg-gradient-dark opacity-6"></span>
          <div class="card-body position-relative z-index-1 d-flex flex-column h-100 p-4">
            <h5 class="text-white font-weight-bolder mb-2 pt-2">{{ \Illuminate\Support\Str::limit($berita['judul'], 85) }}</h5>
            <p class="align-middle text-sm">
              <span class="badge badge-sm bg-gradient-info">{{ $berita['kategori'] }}</span>
            </p>
            <a class="text-white text-sm font-weight-bold mt-auto icon-move-right" href="/post/{{ $berita ['id'] }}">
              Baca Selengkapnya... <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </div>
  
  <div class="container-fluid py-0">
    <div class="row">
      <div class="col-lg-12 mb-4 mt-4 text-center">
        <button id="lihatSemuaBtn" class="btn btn-round btn-sm btn-outline-primary me-2">Lihat Semua</button>
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
  <script src="assets/js/soft-ui-dashboard.min.js?v=1.1.0"></script>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const button = document.getElementById('lihatSemuaBtn');
    button.addEventListener('click', function () {
      document.querySelectorAll('.berita-item.d-none').forEach(function (el) {
        el.classList.remove('d-none');
      });
      button.style.display = 'none'; // sembunyikan tombol setelah ditekan
    });
  });
</script>
</body>

</html>