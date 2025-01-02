<nav class="navbar navbar-expand-lg navbar-light bg-light ">
    <div class="container-fluid">
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('map.index') ? 'active fw-bold' : '' }}"
                        href="{{ route('map.index') }}">Provinsi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('map.gempa') ? 'active fw-bold' : '' }}"
                        href="{{ route('map.gempa') }}">Gempa</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
