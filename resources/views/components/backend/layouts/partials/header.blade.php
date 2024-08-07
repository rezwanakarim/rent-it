<header class="header bg-info" id="header">
    <div class="header_toggle">
        <i class="bx bx-menu" id="header-toggle"></i>
    </div>
    <nav class="navbar navbar-expand ">
        
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class='bx bxs-user-circle bg-dark fs-6 text-white' style="border-radius: 50%"></i>
                {{ Auth::user()->name?? ''}}
                [{{ Auth::user()->role->name?? ''}}]
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">Settings</a></li>
                    <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                    <li><hr class="dropdown-divider" /></li>
    
                    <li>
                        {{-- {{ route('logout') }} --}}
                        <form method="POST" action="">
                            @csrf
                            <a class="dropdown-item" onclick="event.preventDefault();
                            this.closest('form').submit();">Logout</a>
                        </form>
                       
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
    

    

</header>
