@extends('layouts.main')

@section('container')
<main class="form-signin w-100 m-auto">
    <form action="" method="POST">
        <img class="mb-3 w-25 h-25" src="../../assets/img/logo.png" data-aos="zoom-in" data-aos-duration="1000">
        <h1 class="h3 mb-3" style="color:#dfdfdf">Login Admin</h1>
        <?php if (isset($error)) :?>
            <div class="alert alert-danger" role="alert">
                username/password salah!
            </div>
        <?php endif;?>
        <div class="form-floating mb-2">
            <input type="text" class="form-control" style="background-color: #FFFDD0; color:#291F1E" name="username" id="username" placeholder="username" autofocus required>
            <label for="username">Username</label>
        </div>
        <div class="form-floating mb-2">
            <input type="password" class="form-control" style="background-color: #FFFDD0; color:#291F1E" name="password" id="password" placeholder="Password" required>
            <label for="password">Password</label>
        </div>
        <button class="w-100 mb-3 btn btn-lg btn-danger text-dark" name="loginAdmin" id="submit" type="submit" style="background-color:#FFAC42">Login</button>
    </form>
</main>
@endsection