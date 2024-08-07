<div class="l-navbar" id="nav-bar" style="width: ; object-fit: cover">
    <nav class="nav">
        <div>
            <a href="{{ route('home')}}" class="nav_logo">
                <i class="bx bx-home nav_icon"></i>
                <span class="nav_logo-name fs-3">Rent !t</span>
            </a>
            <div class="nav_list">
                <a href="{{route('home')}}" class="nav_link active">
                    <i class="bx bxs-dashboard nav_icon"></i>
                    <span class="nav_name">Dashboard</span>
                </a>
                <a href="{{route('customers.list')}}" class="nav_link">
                    <i class="bx bx-user nav_icon"></i>
                    <span class="nav_name">Customer</span>
                </a>

                <a href="{{ route('categories.list') }}" class="nav_link">
                    <i class="bx bx-category nav_icon"></i>
                    <span class="nav_name">Category</span>
                </a>

                <a href="{{route('sliders.list')}}" class="nav_link">
                    <i class="bx bx-slider nav_icon"></i>
                    <span class="nav_name">Slider</span>
                </a>
                <a href="{{ route('properties.list') }}" class="nav_link">
                    <i class="bx bx-building-house nav_icon"></i>
                    <span class="nav_name">Property</span>
                </a>

                {{-- <a href="{{ route('customers.list') }}" class="nav_link">
                    <i class='bx bx-user'></i>
                    <span class="nav_name">Customer</span>
                </a>

                <a href="{{ route('phones.list') }}" class="nav_link">
                    <i class='bx bxs-phone'></i>
                    <span class="nav_name">Phone</span>
                </a> --}}
                <a href="{{ route('reservations.list') }}" class="nav_link">
                    <i class='bx bxs-book-alt'></i>
                    <span class="nav_name">Reservation</span>
                </a>
                <a href="{{ route('roles.list') }}" class="nav_link">
                    <i class='bx bxs-objects-horizontal-left'></i>
                    <span class="nav_name">Role</span>
                </a>
                <a href="{{route('users.list')}}" class="nav_link">
                    <i class="bx bx-user nav_icon"></i>
                    <span class="nav_name">Users</span>
                </a>
                
            </div>
        </div>
        <a href="{{route('frontend.index')}}" class="nav_link">
            <i class="bx bx-log-out nav_icon"></i>
            <span class="nav_name">SignOut</span>
        </a>
    </nav>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"></script>
