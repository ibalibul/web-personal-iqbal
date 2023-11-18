<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <nav>
        <nav class="navbar navbar-expand-lg  text-white p-3 mb-2 bg-primary text-white ">
            <div class="container-fluid ">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class=" collapse navbar-collapse" id="navbarNavAltMarkup  p-3 mb-2">
                    <div class=" navbar-nav position-absolute top-0 end-0">
                        <a class="nav-link active" aria-current="page" href="{{url('about')}}">About</a>
                        <a class="nav-link" href="{{url('contact')}}">Contact</a>
                        <a class="nav-link" href="{{url('portofolio')}}">Portofolio</a>
                    </div>
                </div>
            </div>
        </nav>
        <!-- <h1>ini halaman about</h1> -->
        <div class="container text-center">
            <div class="row">
                <div class="col">I'm a Software Developer, specializing in React ,Python and full stack designer. I'm a UI/UX nerd, know web development, enjoy front-end design, & create native apps for Android and iOS using React. </div>
                <div class="col">
                    <img src="{{asset('css/image/test.jpg')}}" alt="profile">
                </div>
            </div>
        </div>
        <button>KLIK</button>
    </nav>
    <div class="card mb-3" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>

    <div class="card text-center mb-3" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
</body>

</html>