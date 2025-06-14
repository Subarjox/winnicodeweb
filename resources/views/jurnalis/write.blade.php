<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../media/logo.png">
  <link rel="icon" type="image/png" href="../media/logo.png">
  <title>
    Winnicode News | Publikasi
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
        <li class="nav-item mt-2 mb-2">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Journalis Menu</h6>
        </li>

        
        <li class="nav-item">
          <a class="nav-link" href="/jurnalis/dashboard">
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
        
        <li class="nav-item ">
          <a class="nav-link active " href="/jurnalis/tulis">
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
    <x-jurnavbar :username="$username" page="Publikasi Berita" />

    <div class="container-fluid py-2">
        <div class="row mt-4">
          <div class="col-lg-12 mb-lg-0 mb-4">
            <div class="card">
              <div class="card-body p-4">
                <!-- ALERT MESSAGE -->
                  @if (session('success'))
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                  @endif

                  @if (session('error'))
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                  @endif

                  @if ($errors->any())
                  <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Terjadi kesalahan:</strong>
                    <ul class="mb-0">
                      @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                      @endforeach
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                  @endif

                <form action="{{ url('/jurnalis/tulis') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <!-- Upload Gambar -->
                  <label>Upload Gambar:</label>
                  <div class="mb-3">
                    <div id="drop-zone" class="w-100 min-height-400 text-center p-4 border border-dashed rounded border-secondary" style="cursor:pointer;">
                      <p class="text-secondary mt-8"><strong>Drop</strong> atau <strong>Klik</strong> untuk upload gambar</p>
                      <p class="text-xs text-muted">Batas File Maksimum <strong>25 MB</strong>. Format yang didukung: jpg, png, jpeg</p>
                      <input type="file" id="file-input" accept="image/*" class="form-control d-none" name="gambar" required>
                      <img id="preview" class="img-fluid mt-3 border-radius-lg d-block mx-auto" style="max-height: 200px; display: none;" />
                    </div>
                  </div>
      
                  <!-- Judul Berita -->
                  <label>Judul Berita:</label>
                  <div class="mb-3">
                    <input type="text" class="form-control" placeholder="Isi Judul Berita Di Sini" aria-label="Judul" name="judul" required>
                  </div>
      
                  <!-- Kategori Berita -->
                  <label>Kategori Berita:</label>
                  <div class="mb-3">
                    <input type="text" class="form-control" placeholder="Isi Kategori Berita Di Sini" aria-label="Kategori" name="kategori" required>
                  </div>
      
                  <!-- Deskripsi Berita -->
                  <label>Deskripsi Berita:</label>
                  <div class="mb-3">
                    <textarea class="form-control min-height-200 align-text-bottom" rows="3" placeholder="Isi Deskripsi Berita Di Sini" aria-label="Deskripsi" name="deskripsi" required></textarea>
                  </div>
      
                  <!-- Tombol Submit -->
                  <div class="text-center">
                    <button type="submit" class="btn bg-gradient-primary w-100 mt-4 mb-0">Buat Berita</button>
                  </div>
      
                </form>
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/soft-ui-dashboard.min.js?v=1.1.0"></script>
  <script>
    const dropZone = document.getElementById('drop-zone');
    const fileInput = document.getElementById('file-input');
    const preview = document.getElementById('preview');
  
    dropZone.addEventListener('click', () => fileInput.click());
  
    dropZone.addEventListener('dragover', function (e) {
      e.preventDefault();
      dropZone.classList.add('border-primary');
    });
  
    dropZone.addEventListener('dragleave', function () {
      dropZone.classList.remove('border-primary');
    });
  
    dropZone.addEventListener('drop', function (e) {
      e.preventDefault();
      dropZone.classList.remove('border-primary');
      const files = e.dataTransfer.files;
      if (files.length > 0) {
        handleFile(files[0]);
      }
    });
  
    fileInput.addEventListener('change', function () {
      if (fileInput.files.length > 0) {
        handleFile(fileInput.files[0]);
      }
    });
  
    function handleFile(file) {
      if (!file.type.startsWith('image/')) {
        alert('Hanya file gambar yang diizinkan!');
        return;
      }
  
      if (file.size > 25 * 1024 * 1024) {
        alert('Ukuran maksimal adalah 25MB.');
        return;
      }
  
      const reader = new FileReader();
      reader.onload = function (e) {
        preview.src = e.target.result;
        preview.style.display = 'block';
      };
      reader.readAsDataURL(file);
    }
    
  </script>
  
</body>

</html>