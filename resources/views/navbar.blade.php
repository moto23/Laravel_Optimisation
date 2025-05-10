<nav
    class="
            navbar navbar-expand-lg navbar-absolute
            fixed-top
            navbar-transparent
          ">
    <div class="container" style="margin-bottom: 10px">
        <div class="navbar-wrapper">
            <div class="navbar-toggle">
                <button type="button" class="navbar-toggler">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </button>
            </div>
            {{-- <a style="color: rgb(255, 123, 0); font-size: 25px" class="navbar-brand" href="javascript:;">DASHBOARD</a> --}}
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
            aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <div class="btn-group">
                <button type="button" class="btn btn-primary dropdown-toggle text-white " data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Hello, {{ $teacherName }}
                </button>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li>
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('assets/img/profile.png') }}" alt="Profile Logo" class="ms-2 py-1"
                                style="width: 30px; height: 30px; border-radius: 30%; margin-right: 5px; cursor: pointer;"
                                onclick="window.location.href = 'profile_page.php';">
                            <div style="margin-right: auto; cursor: pointer;"
                                onclick="window.location.href = 'profile_page.php';">Profile</div>
                        </div>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="{{ url('/') }}">Logout</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<style>
    .navbar-nav.ms-auto {
        margin-left: auto !important;
    }
</style>
