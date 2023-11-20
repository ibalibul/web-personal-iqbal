<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website Me</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <nav>
        <nav class="navbar navbar-expand-lg  text-white p-3 mb-2 bg-body-tertiary ">
            <div class="container-fluid ">
                <a class="navbar-brand" href="#">Website Me</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class=" collapse navbar-collapse" id="navbarNavAltMarkup  p-3 mb-2  ">
                    <div class=" navbar-nav position-absolute mt-3 top-0 end-0">
                        <a class="nav-link active" aria-current="page" href="{{url('about')}}">About</a>
                        <a class="nav-link" href="{{url('contact')}}">Contact</a>
                        <a class="nav-link" href="{{url('portofolio')}}">Portofolio</a>
                        <a class="nav-link" href="{{url('blog')}}">Blog</a>
                    </div>
                </div>
            </div>
        </nav>
        <div class="card text-bg-dark">
            <img height="500" src="assets/bghitam.jpg" class="card-img" alt="...">
            <div class="card-img-overlay position-absolute top-50 start-50 translate-middle bt-5">
                <h5 class="card-title">Hello</h5>
                <h1 class="card-text">H'I Welcome To My Website Me </h1>
                <p class="card-text"><small>Linkin: Mochammad Iqbal Saputra</small></p>
                <a href="#" class="btn btn-warning">Lihat Lebih Lanjut>></a>
            </div>
        </div>
        </div>
        <!-- <h1>ini halaman about</h1> -->
        <div class="container text-center mt-5">
            <div class="row">
                <div class="col row align-items-center">I'm a Software Developer, specializing in React. I'm a UI/UX nerd, know web development, enjoy front-end design, & create native apps for Android and iOS using React.
                </div>
                <div class="col">
                    <img width="400" class="rounded-5" src="assets/profilee.jpeg" alt="">
                </div>
            </div>
        </div>
        <!-- <button class="btn btn-warning">Botton coba</button> -->
    </nav>
    <!-- My Experience -->
    <div class="row mt-5 ms-4 me-4">
        <h1>MY EXPERIENCE</h1>
        <div class="col-sm-6 mb-3 mb-sm-0">
            <div class="card bg-black text-white">
                <div class="card-body">
                    <h3 class="card-title">Android Engginering</h3>
                    <p class="card-text">Studi Independen (MBKM) Binar Academy</p>
                    <a href="#" class="btn btn-warning">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card bg-black text-white">
                <div class="card-body">
                    <h3 class="card-title">Website and Mobile</h3>
                    <p class="card-text">Studi Independen (MBKM) Hactive8 Indonesia </p>
                    <a href="#" class="btn btn-warning">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6 mt-3">
            <div class="card bg-black text-white">
                <div class="card-body">
                    <h3 class="card-title">Internship</h3>
                    <p class="card-text">IT Support Finel Computer</p>
                    <a href="#" class="btn btn-warning">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>
    <!-- My Education -->
    <div class="row mt-5 ms-4 me-4">
        <h1>MY EDUCATION</h1>
        <div class="col-sm-6 mb-3 mb-sm-0">
            <div class="card bg-black text-white">
                <div class="card-body">
                    <h3 class="card-title">TEKNIK KOMPUTER DAN JARINGAN</h3>
                    <p class="card-text">SMK TRIGUNA UTAMA</p>
                    <a href="#" class="btn btn-warning">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card bg-black text-white">
                <div class="card-body">
                    <h3 class="card-title">TEKNIK INFORMATIKA</h3>
                    <p class="card-text">INSTITUT TEKNOLOGI INDONESIA</p>
                    <a href="#" class="btn btn-warning">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>
</body>
<footer class=" p-5 mt-5 bg-body-secondary ">
    <div class="position-relative">
        <div class="position-absolute top-0 start-50 translate-middle-x">
            &copy; 2023 Mochammad Iqbal Saputra
        </div>
    </div>
</footer>

</html>