<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
<header class="header" id="header">
    <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
    </div>
</header>
<div class="l-navbar" id="nav-bar">
    <div class="nav">
        <div> <a href="#" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span
                    class="nav_logo-name">E - Bansos</span>
            </a>
            <div class="nav_list">
                <a href="#" class="nav_link active"> <i class='bx bx-grid-alt nav_icon'></i> <span
                        class="nav_name">Dashboard</span> </a>
                <a href="#" class="nav_link"> <i class='bx bx-user nav_icon'></i> <span
                        class="nav_name">Users</span> </a>
                <a href="#" class="nav_link"> <i class='bx bx-folder nav_icon'></i> <span
                        class="nav_name">Pendaftar Bansos</span> </a>
                <a href="{{ route('bansos.index') }}" class="nav_link"> <i class='bx bx-folder nav_icon'></i> <span
                        class="nav_name">Penerima Bansos</span> </a>
            </div>
            <a href="{{ route('logout') }}" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span
                    class="nav_name">SignOut</span> </a>
        </div>
    </div>
</div>
