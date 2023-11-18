<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <h1>ini halaman about</h1>
    <div class="container text-center">
        <div class="row">
            <div class="col">Hello My Name Is Mochammad Iqbal Saputra </div>
            <div class="col">
                <img src="{{asset('image/1.jpg)'}}" alt="">
            </div>
        </div>
    </div>
</body>

</html>