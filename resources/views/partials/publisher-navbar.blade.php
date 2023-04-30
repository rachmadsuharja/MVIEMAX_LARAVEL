<nav class="navbar navbar-expand-lg w-100 position-fixed bg-danger" data-bs-theme="dark">
    <div class="container-fluid">
        <div class="container bg-danger d-flex align-items-center">
            <h1 class="navbar-brand text-white">Dashboard</h1>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link {{($title === 'Publisher') ? 'active' : ''}}" aria-current="page" href="/publisher">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{($title === 'Film Settings') ? 'active' : ''}}" aria-current="page" href="/publisher/film-settings">Film</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{($title === 'Settings') ? 'active' : ''}}" aria-current="page" href="#">Settings</a>
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