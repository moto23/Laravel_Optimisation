<div class="sidebar" data-color="white" data-active-color="danger">
    <div class="logo">
        <a href="#">
            <div class="logo-image-small">
                <img src="{{ asset('assets/img/banner.png') }}" />
            </div>
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <!-- First Section   -->
            <li class="active">
                <a href="#">
                    <p class="section-header">Main Menu</p>
                </a>
            </li>

            <li class="{{ request()->is('dashboard') ? 'active' : '' }}">
                <a href="{{ url('/dashboard') }}" class="nav-link">
                    <i class="fas fa-th-large"></i>
                    <p class="menu-item">Dashboard</p>
                </a>
            </li>

            <li class="{{ request()->is('insights') ? 'active' : '' }}">
                <a href="{{ url('/insights') }}" class="nav-link">
                    <i class="fas fa-desktop"></i>
                    <p class="menu-item">User Insights</p>
                </a>
            </li>

            <!-- Second Section -->
            <li class="active">
                <a href="#">
                    <p class="section-header">Add Information</p>
                </a>
            </li>

            <li class="{{ request()->is('add_set') ? 'active' : '' }}">
                <a href="{{ url('/add_set') }}" class="nav-link">
                    <i class="fas fa-tag"></i>
                    <p class="menu-item">New Question Set</p>
                </a>
            </li>

            <li class="{{ request()->is('add_question') ? 'active' : '' }}">
                <a href="{{ url('/add_question') }}" class="nav-link">
                    <i class="fas fa-question"></i>
                    <p class="menu-item">New Question</p>
                </a>
            </li>

            <li class="{{ request()->is('add_bulk_question') ? 'active' : '' }}">
                <a href="{{ url('/add_bulk_question') }}" class="nav-link">
                    <i class="fas fa-file-import"></i>
                    <p class="menu-item">Bulk Importer</p>
                </a>
            </li>

            <li class="{{ request()->is('add_championship') ? 'active' : '' }}">
                <a href="{{ url('/add_championship') }}" class="nav-link">
                    <i class="far fa-plus-square"></i>
                    <p class="menu-item">New Championship</p>
                </a>
            </li>

            <li class="{{ request()->is('add_new_mode') ? 'active' : '' }}">
                <a href="{{ url('/add_new_mode') }}" class="nav-link">
                    <i class="fas fa-crosshairs"></i>
                    <p class="menu-item">New Game Mode</p>
                </a>
            </li>

            <!-- Third Section -->
            <li class="active">
                <a href="#">
                    <p class="section-header">All Information</p>
                </a>
            </li>

            <li class="{{ request()->is('all_championships') ? 'active' : '' }}">
                <a href="{{ url('/all_championships') }}" class="nav-link">
                    <i class="fas fa-trophy"></i>
                    <p class="menu-item">All Championships</p>
                </a>
            </li>

            <li class="{{ request()->is('question_bank') ? 'active' : '' }}">
                <a href="{{ url('/question_bank') }}" class="nav-link">
                    <i class="fas fa-question-circle"></i>
                    <p class="menu-item">Question Bank</p>
                </a>
            </li>

            <li class="{{ request()->is('all_sets') ? 'active' : '' }}">
                <a href="{{ url('/all_sets') }}" class="nav-link">
                    <i class="fas fa-plus-square"></i>
                    <p class="menu-item">All Question Sets</p>
                </a>
            </li>

            <li class="{{ request()->is('all_game_modes') ? 'active' : '' }}">
                <a href="{{ url('/all_game_modes') }}" class="nav-link">
                    <i class="fas fa-coins"></i>
                    <p class="menu-item">All Game Modes</p>
                </a>
            </li>

            <li class="{{ request()->is('all_categories') ? 'active' : '' }}">
                <a href="{{ url('/all_categories') }}" class="nav-link">
                    <i class="fas fa-layer-group"></i>
                    <p class="menu-item">All Categories</p>
                </a>
            </li>

            <li class="{{ request()->is('wrong_questions') ? 'active' : '' }}">
                <a href="{{ url('/wrong_questions') }}" class="nav-link">
                    <i class="fas fa-times-circle"></i>
                    <p class="menu-item">Wrong Questions</p>
                </a>
            </li>

            <!-- Analytics Section -->
            <li class="active">
                <a href="#">
                    <p class="section-header">Analytics</p>
                </a>
            </li>

            <li class="{{ request()->is('analytics') ? 'active' : '' }}">
                <a href="{{ url('/analytics') }}" class="nav-link">
                    <i class="fas fa-chart-line"></i>
                    <p class="menu-item">Championship</p>
                </a>
            </li>

            <!-- Support Section -->
            <li class="active">
                <a href="#">
                    <p class="section-header">Support</p>
                </a>
            </li>

            <li class="{{ request()->is('help') ? 'active' : '' }}">
                <a href="{{ url('/help') }}" class="nav-link">
                    <i class="fas fa-user"></i>
                    <p class="menu-item">Teacher's Help</p>
                </a>
            </li>

            <li class="{{ request()->is('contact') ? 'active' : '' }}">
                <a href="{{ url('/contact') }}" class="nav-link">
                    <i class="fas fa-phone"></i>
                    <p class="menu-item">Contact</p>
                </a>
            </li>

            <!-- Terms Section -->
            <li class="active">
                <a href="#">
                    <p class="section-header">Terms and Conditions</p>
                </a>
            </li>

            <li class="{{ request()->is('terms-and-conditions') ? 'active' : '' }}">
                <a href="{{ url('/terms-and-conditions') }}" class="nav-link">
                    <i class="fas fa-user"></i>
                    <p class="menu-item">For Teacher</p>
                </a>
            </li>
        </ul>
    </div>
</div>


<style>
    .sidebar {
        position: fixed;
        width: 250px;
        height: 100%;
        background: white;
        box-shadow: 0 2px 22px rgba(0, 0, 0, 0.1);
        z-index: 1000;
    }

    .sidebar .nav li>a {
        display: flex;
        align-items: center;
        padding: 12px 10px;
        color: black;
        font-size: 16px;
        font-weight: bold;
        padding-top: 15px;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .sidebar .nav li>a i {
        width: 24px;
        margin-right: 12px;
        text-align: center;
        flex-shrink: 0;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const sidebar = document.querySelector('.sidebar');
        const navLinks = document.querySelectorAll('.nav-link');

        const savedPosition = sessionStorage.getItem('sidebarScrollPosition');
        if (savedPosition !== null) {
            sidebar.scrollTop = savedPosition;
            sessionStorage.removeItem('sidebarScrollPosition');
        }

        navLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                if (e.target.getAttribute('href') && !e.target.getAttribute('href').startsWith(
                        '#')) {
                    sessionStorage.setItem('sidebarScrollPosition', sidebar.scrollTop);
                }
            });
        });

        window.addEventListener('beforeunload', function() {
            sessionStorage.setItem('sidebarScrollPosition', sidebar.scrollTop);
        });
    });
</script>
