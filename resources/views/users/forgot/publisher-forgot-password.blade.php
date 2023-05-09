<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Publisher | Lupa Password</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <style>
        html,
        body {
            height: 100%;
        }

        body {
            display: flex;
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #333333;
        }

        .form-signin {
            max-width: 24em;
            padding: 2em;
            background-color: crimson;
            border-radius: 1em;
            box-shadow: 0px 4px 10px #1b1b1b;
        }

        .form-signin .form-floating:focus-within {
            z-index: 2;
        }
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }
        
        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
        
        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }
        
        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }
        
        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }
        
        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }
        
        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }
        .form-floating>.form-control-plaintext~label::after,
        .form-floating>.form-control:focus~label::after,
        .form-floating>.form-control:not(:placeholder-shown)~label::after,
        .form-floating>.form-select~label::after {
            position: absolute;
            inset: 1rem 0.375rem;
            z-index: -1;
            height: 1.5em;
            content: "";
            background-color: #FFFDD0;
            border-radius: var(--bs-border-radius);
        }
    </style>
</head>

<body class="text-center">
    <main class="form-signin w-100 m-auto">
        <form action="{{route('publisher-update-password')}}" method="POST">
            @csrf
            @method('put')
            <img class="w-25 h-25 mb-3" src="/img/logo.png" data-aos="zoom-in" data-aos-duration="1000">
            <h1 class="h3 mb-3" style="color:#dfdfdf;">Ganti Password</h1>
            <div class="form-floating mb-2">
                <input type="text" class="form-control" style="background-color: #FFFDD0; color:#291F1E" name="username" id="userName" placeholder="Username" autofocus required>
                <label for="userName">Username</label>
            </div>
            <div class="form-floating mb-2">
                <input type="password" class="form-control" style="background-color: #FFFDD0; color:#291F1E" name="password" id="password" placeholder="Password" required>
                <label for="password">Password Baru</label>
            </div>
            <div class="form-floating mb-2">
                <input type="password" class="form-control" style="background-color: #FFFDD0; color:#291F1E" name="confirm_password" id="password" placeholder="Password" required>
                <label for="password">Konfirmasi Password Baru</label>
            </div>
            <button class="w-100 mb-3 btn btn-lg btn-danger text-dark" name="gantiPW" id="submit" type="submit" style="background-color:#FFAC42">Ganti</button>
        </form>
    </main>
</body>
<script>
    AOS.init();
</script>
</html>