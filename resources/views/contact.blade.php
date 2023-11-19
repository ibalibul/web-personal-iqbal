<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
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
                    </div>
                </div>
            </div>
        </nav>
        <div class="card text-bg-dark">
            <img height="500" src="assets/bghitam.jpg" class="card-img" alt="...">
            <div class="card-img-overlay position-absolute top-50 start-50 translate-middle bt-5">
                <h1 class="card-text">H'I Welcome To My Contact </h1>
                <p class="card-text"><small>Linkin: Mochammad Iqbal Saputra</small></p>
                <p>Github: Ibalibul</p>
                <p>Email: cemong123aldi@gmail.com</p>
                <a href="#" class="btn btn-warning">Lihat Lebih Lanjut>></a>
            </div>
        </div>

        <footer class=" p-5 mt-5 bg-body-secondary ">
            <div class="position-relative">
                <div class="position-absolute top-0 start-50 translate-middle-x">
                    &copy; 2023 Mochammad Iqbal Saputra
                </div>
            </div>
        </footer>
</body>

</html>