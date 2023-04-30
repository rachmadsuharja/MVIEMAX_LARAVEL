<nav class="navbar navbar-expand-lg w-100 position-fixed bg-danger" data-bs-theme="dark">
    <div class="container-fluid">
        <div class="container bg-danger d-flex align-items-center">
            <h1 class="navbar-brand text-white">{{$title}}</h1>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link {{($title === 'Administrator') ? 'active' : ''}}" aria-current="page" href="/administrator">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{($title === 'Movies') ? 'active' : ''}}" aria-current="page" href="/admin/all-movies">Movie</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{($title === 'Role Settings') ? 'active' : ''}}" aria-current="page" href="/admin/roles">Role</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white-50" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    User
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/admin/publishers">Publisher</a></li>
                    <li><a class="dropdown-item" href="/admin/memberships">Membership</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link {{($title === 'Feedback Settings') ? 'active' : ''}}" aria-current="page" href="/admin/feedback">Feedback</a>
            </li>
            <div class="container bg-danger d-flex align-items-center justify-content-start">
                <li class="nav-item w-100">
                    <button class="btn btn-outline-dark p-1">LOGOUT</button>
                </li>
            </div>
        </ul>
        </div>
    </div>
</nav>