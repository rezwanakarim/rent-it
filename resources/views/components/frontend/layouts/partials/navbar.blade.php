<header id="header-container">
    
    <!-- nav bar  -->
    <div id="header" class="mb-4">
        <div class="container-fluid px-5 navigation shadow">
            <div class="row">
                <div class="left-side col-md-7">
                    <nav class="navbar navbar-expand-lg">
                        <div class="container-fluid">
                            <a href="{{ route('frontend.index')}}" class="navbar-brand fs-2">Rent it</a>
                            <!-- collapse button  -->
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <!-- parent nav  -->
                            <div class="collapse navbar-collapse mx-5" id="nav">
                                <ul class="navbar-nav">
                                    <!--parent nav items  -->
                                    <li class="nav-item px-3"><a class="nav-link fs-5" href="{{route('frontend.properties')}}">All Property</a>
                                    <li class="nav-item px-3"><a class="nav-link fs-5" href="#">Blog</a></a>
                                    <li class="nav-item px-3 dropdown"><a class="nav-link dropdown-toggle fs-5" data-bs-toggle="dropdown" href="#">
                                            Location</a>
                                        <!-- 1st dropdown  -->
                                        <ul class="dropdown-menu">

                                            <li class="dropdown-item dropdown"><a class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" href="#">Barishal</a>

                                            </li>

                                            <li class="dropdown-item dropdown"><a class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" href="#">Chittagong</a>

                                            </li>

                                            <li class="dropdown-item dropdown"><a class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" href="#">Dhaka</a>
                                                <ul class="dropdown-menu submenu">
                                                    <li class="dropdown"><a href="#" class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown">Dhaka</a>
                                                        <ul class="dropdown-menu submenu">
                                                            <li><a class="dropdown-item" href="#">60 Feet Road</a></li>
                                                            <li><a class="dropdown-item" href="#">Adabor</a></li>
                                                            <li><a class="dropdown-item" href="#">Aftab Nagar</a></li>
                                                            <li><a class="dropdown-item" href="#">Agargaon</a></li>
                                                            <li><a class="dropdown-item" href="#">Airport</a></li>
                                                            <li><a class="dropdown-item" href="#">Azimpur</a> </li>
                                                            <li><a class="dropdown-item" href="#">Badda</a></li>
                                                            <li><a class="dropdown-item" href="#">Banani</a></li>
                                                            <li><a class="dropdown-item" href="#">Banasree</a> </li>
                                                            <li><a class="dropdown-item" href="#">Banglamotor</a></li>
                                                            <li><a class="dropdown-item" href="#">Bangshal</a> </li>
                                                            <li><a class="dropdown-item" href="#">Basabo</a></li>
                                                            <li><a class="dropdown-item" href="#">Bashundhara R.A</a></li>
                                                            <li><a class="dropdown-item" href="#">Bhashantek</a> </li>
                                                            <li><a class="dropdown-item" href="#">Bosila</a> </li>
                                                            <li><a class="dropdown-item" href="#">Cantonment</a></li>
                                                            <li><a class="dropdown-item" href="#">Darussalam</a> </li>
                                                            <li><a class="dropdown-item" href="#">Daskhinkhan</a></li>
                                                            <li><a class="dropdown-item" href="#">Dhamrai</a></li>
                                                            <li><a class="dropdown-item" href="#">Dhanmondi</a></li>
                                                            <li><a class="dropdown-item" href="#">Elephant Road</a></li>
                                                            <li><a class="dropdown-item" href="#">Farmgate</a> </li>
                                                            <li><a class="dropdown-item" href="#">Gandaria</a></li>
                                                            <li><a class="dropdown-item" href="#">Gulshan</a></li>
                                                            <li><a class="dropdown-item" href="#">Hazaribag</a></li>
                                                            <li><a class="dropdown-item" href="#">Jatrabari</a></li>
                                                            <li><a class="dropdown-item" href="#">Kafrul</a> </li>
                                                            <li><a class="dropdown-item" href="#">Kalabagan</a></li>
                                                            <li><a class="dropdown-item" href="#">Kallyanpur</a></li>
                                                            <li><a class="dropdown-item" href="#">Karwan Bazar</a></li>
                                                            <li><a class="dropdown-item" href="#">Keraniganj</a></li>
                                                            <li><a class="dropdown-item" href="#">Khilgaon</a></li>
                                                            <li><a class="dropdown-item" href="#">Khilkhet</a></li>
                                                            <li><a class="dropdown-item" href="#">Kuril</a></li>
                                                            <li><a class="dropdown-item" href="#">Lalbag</a></li>
                                                            <li><a class="dropdown-item" href="#">Malibag</a></li>
                                                            <li><a class="dropdown-item" href="#">Mirpur</a></li>
                                                            <li><a class="dropdown-item" href="#">Moghbazar</a></li>
                                                            <li><a class="dropdown-item" href="#">Mohakhali</a></li>
                                                            <li><a class="dropdown-item" href="#">Mohammadpur</a></li>
                                                            <li><a class="dropdown-item" href="#">Motijheel</a></li>
                                                            <li><a class="dropdown-item" href="#">Mugda</a></li>
                                                            <li><a class="dropdown-item" href="#">New Market</a></li>
                                                            <li><a class="dropdown-item" href="#">Others</a> </li>
                                                            <li><a class="dropdown-item" href="#">Pallabi</a> </li>
                                                            <li><a class="dropdown-item" href="#">Paltan</a> </li>
                                                            <li><a class="dropdown-item" href="#">Ramna</a> </li>
                                                            <li><a class="dropdown-item" href="#">Rampura</a></li>
                                                            <li><a class="dropdown-item" href="#">Rayer Bazar</a></li>
                                                            <li><a class="dropdown-item" href="#">Rupnagar</a></li>
                                                            <li><a class="dropdown-item" href="#">Sabujbag</a></li>
                                                            <li><a class="dropdown-item" href="#">Savar</a> </li>
                                                            <li><a class="dropdown-item" href="#">Shahbag</a></li>
                                                            <li><a class="dropdown-item" href="#">Shahjahanpur</a> </li>
                                                            <li><a class="dropdown-item" href="#">Sherebanglanagar</a></li>
                                                            <li><a class="dropdown-item" href="#">Shewrapara</a></li>
                                                            <li><a class="dropdown-item" href="#">Shyamoli</a></li>
                                                            <li><a class="dropdown-item" href="#">Shyampur</a></li>
                                                            <li><a class="dropdown-item" href="#">Sutrapur</a> </li>
                                                            <li><a class="dropdown-item" href="#">Tejgaon</a> </li>
                                                            <li><a class="dropdown-item" href="#">Tejgaon I/A</a></li>
                                                            <li><a class="dropdown-item" href="#">Turag</a> </li>
                                                            <li><a class="dropdown-item" href="#">Uttara</a> </li>
                                                            <li><a class="dropdown-item" href="#">Uttara West</a></li>
                                                            <li><a class="dropdown-item" href="#">Uttarkhan</a></li>
                                                            <li><a class="dropdown-item" href="#">Vatara</a></li>
                                                            <li><a class="dropdown-item" href="#">Wari</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" href="#">Faridpur</a>
                                                        <ul class="dropdown-menu submenu">
                                                            <li><a href="#">Bhanga</a></li>
                                                            <li><a href="#">Faridpur Sadar</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" href="#">Gazipur</a>
                                                        <ul class="dropdown-menu submenu">
                                                            <li><a href="#">Gazipur Sadar</a></li>
                                                            <li><a href="#">Tongi</a> </li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" href="#">Gopalganj</a>
                                                        <ul class="dropdown-menu submenu">
                                                            <li><a href="#">Gopalganj Sadar</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" href="#">Kishoreganj</a>
                                                        <ul class="dropdown-menu submenu">
                                                            <li><a href="#">Itna</a></li>
                                                            <li><a href="#">Kishoreganj Sadar</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown"><a class="dropdown-item dropdown" data-bs-toggle="dropdown" href="#">Madaripur</a>
                                                        <ul class="dropdown-menu submenu">
                                                            <li><a href="#">Madaripur Sadar</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown"><a class="dropdown-item dropdown" data-bs-toggle="dropdown" href="#">Manikganj</a>
                                                        <ul class="dropdown-menu submenu">
                                                            <li><a href="#">Manikganj Sadar</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown"><a class="dropdown-item dropdown" data-bs-toggle="dropdown" href="#">Munshiganj</a>
                                                        <ul class="dropdown-menu submenu">
                                                            <li><a href="#">Munshiganj Sadar</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown"><a class="dropdown-item dropdown" data-bs-toggle="dropdown" href="#">Narayanganj</a>
                                                        <ul class="dropdown-menu submenu">
                                                            <li><a href="#">Naryanganj Sadar</a></li>
                                                            <li><a href="#">Rupganj</a></li>
                                                            <li><a href="#">Siddirgonj</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown"><a class="dropdown-item dropdown" data-bs-toggle="dropdown" href="#">Narsingdi</a>
                                                        <ul class="dropdown-menu submenu">
                                                            <li><a href="#">Narsingdi Sadar</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown"><a class="dropdown-item dropdown" data-bs-toggle="dropdown" href="#">Rajbari</a>
                                                        <ul class="dropdown-menu submenu">
                                                            <li><a href="#">Rajbari Sadar</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown"><a class="dropdown-item dropdown" data-bs-toggle="dropdown" href="#">Shariatpur</a>
                                                        <ul class="dropdown-menu submenu">
                                                            <li><a href="#">Shariatpur Sadar Palong</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown"><a class="dropdown-item dropdown" data-bs-toggle="dropdown" href="#">Tangail</a>
                                                        <ul class="dropdown-menu submenu">
                                                            <li><a href="#">Tangail Sadar</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li class="dropdown-item dropdown"><a class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" href="#">Khulna</a>

                                            </li>

                                            <li class="dropdown-item dropdown"><a class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" href="#">Rajshahi</a>

                                            </li>

                                            <li class="dropdown-item dropdown"><a class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" href="#">Rangpur</a>

                                            </li>

                                            <li class="dropdown-item dropdown"><a class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" href="#">Sylhet</a>

                                            </li>

                                            <li class="dropdown-item dropdown"><a class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" href="#">Mymensingh</a>

                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown px-3"><a class="nav-link dropdown-toggle fs-5" data-bs-toggle="dropdown" href="#">Category</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Family House</a></li>
                                            <li><a class="dropdown-item" href="#">Bachelor</a></li>
                                            <li><a class="dropdown-item" href="#">Office</a></li>
                                            <li><a class="dropdown-item" href="#">Hostel</a></li>
                                            <li><a class="dropdown-item" href="#">Sublet</a></li>

                                        </ul>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>

                <!-- right side login/reg  -->
                <div class="right-side col-md-5 ">
                    <nav class="navbar navbar-expand-lg bg-body-tertiary float-end">
                        <div class="container-fluid">
                            
                            <ul class="navbar-nav me-auto my-2">
                                <li class="nav-item me-4 mt-2">
                                    <a href="#" class="position-relative" style="background-color: transparent; border: none; padding: .4rem;" id="notification">
                                        <i class='bx bxs-bell fs-3 text-dark'></i>
                                        <span class="position-absolute top-0 start-100 translate-middle badge bg-dark">
                                            
                                        <span id="notification-badge">2</span>
                                    </a>
                                </li>
                                <li class="nav-item"><a href="{{ route('customers.login')}}" class="nav-link btn btn-dark text-light">Login / Register</a></li>
                                <li class="nav-item mx-4"><a href="#" class="nav-link">Rent Your Property <i class="bx bx-plus"></i></a></li>
                            </ul>
                        </div>

                    </nav>
                </div>
            </div>
        </div>

    </div>

</header>