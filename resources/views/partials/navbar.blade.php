
<nav class="navbar navbar-expand-lg bg-dark position-fixed top-0 w-100" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">
            <img src="/img/logo.png" width="40">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link {{($title === 'Halaman Utama') ? 'active' : ''}}" href="/">Home</a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link {{($title === 'Register Membership') ? 'active' : ''}} {{($title === 'Register Publisher') ? 'active' : ''}} dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                User
            </a>
            <ul class="dropdown-menu dropdown-menu">
                <li><a class="dropdown-item" href="/member-register">Membership</a></li>
                <li><a class="dropdown-item" href="/publisher-register">Publisher</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="/login-admin">Admin</a></li>
            </ul>
            </li>
            <li class="nav-item">
            <a class="nav-link {{($title === 'User Feedback') ? 'active' : ''}}" href="/user-feedback">Feedback</a>
            </li>
        </ul>
        </div>
    </div>
</nav>