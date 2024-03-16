<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <!-- vite untuk memanggil file css pastikan run "php artisan serve" dan "run npm dev" terlebih dahulu -->
        @vite(['resources/scss/app.scss', 'resources/js/app.js'])

    </head>
     <body>
        <nav class="navbar navbar-dark navbar-expand-lg bg-primary">
            <!-- class container flex = agar flexibel
            class justify-content-between = agar berada di tengah -->
            <div class="container flex justify-content-between">
              <a class="navbar-link" href="{{route('home')}}">
                <!-- cara mskkin gambar & ubah ukuran / height pke class h-32px dari utility.scss-->
                <img class="h-32px" src="{{url('assets/images/logo-white.png')}}" alt="Laracuss Logo" class="src">
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- class mx-0 margin kiri kanan utk mobile mx-lg-3 utk desktop cont. liat foto logo -->
                <ul class="navbar-nav mx-0 mx-lg-3">
                  <!-- d-block menghilangkan home ketika ukuran di d-lg-none sementara ketika d-xl-block / diperbesarlgi maka home akan kembali ada -->
                  <li class="nav-item d-block d-lg-none d-xl-block">
                    <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
                  </li>
                  <li class="nav-item ">
                    <a class="nav-link" href="#">Discussions</a>
                  </li>
                  <li class="nav-item ">
                    <a class="nav-link text-nowrap" href="#">About Us</a>
                  </li>
                </ul>
                <form class="d-flex w-100 me-4 my-2 my-lg-0" role="search" action="#" method="GET">
                  <div class="input-group">
                    <span class="input-group-text bg-white border-end-0"><img src="{{url('assets/images/magnifier.png')}}" alt=""></span>
                    <input class="form-control border-start-0 ps-0" type="search" placeholder="Search" aria-label="Search" name="" value="" >
                  </div>
                </form>
                <ul class="navbar-nav ms-auto my-2 my-lg-0">
                  <li class="nav-item my-auto">
                    <a class="nav-link text-nowrap" href="#">Log in</a>
                  </li>
                  <li class="nav-item ps-1 pe-0">
                    <a class="btn btn-primary-white" href="#">Sign Up</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
          
          <!- script untuk jquery
          <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
     </body>
</html>
