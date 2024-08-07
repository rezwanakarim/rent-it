<x-backend.layouts.master>

    <div class="bg-dark p-2 rounded">
        <div class="bg-light rounded">

            <h2 class="alert alert-info text-center">User Details | <span><a
                        href="{{ route('users.list') }}">List</a></span></h2>

            {{-- <div class=" row justify-content-center">
                <div class="bg-light p-3 my-3 col-8 shadow-lg rounded">
                    <h5 class="d-inline-block bg-light">user Name:</h5><br>
                    <h4 class="alert alert-secondary ">{{ $user->name}}</h4>

                </div>
            </div> --}}
            <div class="container rounded bg-white">
                <div class="row">
                    <div class="col-md-3 border-right">
                        <div class="d-flex flex-column align-items-center text-center p-3">
                            <img class="rounded-circle mt-5" width="150px" src="https://cutt.ly/N4M2Cu0">
                            <span class="font-weight-bold">{{ $user->username }}</span>
                            <span class="text-black-50">{{ $user->email }}</span>
                        </div>
                    </div>
                    <div class="col-md-5 border-right">
                        <div class="p-3">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4 class="text-right">Profile Settings</h4>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-12">
                                    <label class="fs-6 text-secondary">First name</label>
                                    <p class="fw-semibold fs-5">{{ $user->firstName }}</p>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-12">
                                    <label class="fs-6 text-secondary">Surname</label>
                                    <p class="fw-semibold fs-5">{{ $user->lastName }}</p>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-12">
                                    <label class="fs-6 text-secondary">Gender</label>
                                    <p class="fw-semibold fs-5">{{ $user->gender }}</p>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-12">
                                    <label class="fs-6 text-secondary">Email address</label>
                                    <p class="fw-semibold fs-5">{{ $user->email }}</p>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-12">
                                    <label class="fs-6 text-secondary">Phone number</label>
                                    <p class="fw-semibold fs-5">{{ $user->number }}</p>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-12">
                                    <label class="fs-6 text-secondary">Address</label>
                                    <p class="fw-semibold fs-5">{{ $user->address }}</p>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-12">
                                    <label class="fs-6 text-secondary">First access to site</label>
                                    <p class="fw-semibold fs-5">{{ $user->created_at }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="p-3">
                            <div class="d-flex justify-content-between align-items-center experience">
                                <span class="fs-5 text-dark">Recent activity</span>
                            </div><br>
                            <div class="col-md-12 border rounded p-4">
                                <label class="fs-6 text-secondary">Favorite property</label>
                                <p class="fw-semibold fs-5"> 5</p>
                            </div>
                            <br>
                            <div class="col-md-12 border rounded p-4">
                                <label class="fs-6 text-secondary">User role</label>
                                <p class="fw-semibold fs-5"> {{ $user->role_id == 0 ? 'Not set yet' : $user->role->name}}</p>
                            </div>
                            <br>

                        </div>
                    </div>
                </div>
                <div class="pb-3 text-center">
                    <a href="{{ route('users.list')}}" class="btn btn-primary btn-lg px-4 profile-button">Back</a>
                </div>
            </div>
        </div>
    </div>


    <style>
        .form-control:focus {
            box-shadow: none;
            border-color: #BA68C8
        }

        .profile-button {
            background: rgb(99, 39, 120);
            box-shadow: none;
            border: none
        }

        .profile-button:hover {
            background: #682773
        }

        .profile-button:focus {
            background: #682773;
            box-shadow: none
        }

        .profile-button:active {
            background: #682773;
            box-shadow: none
        }

        .back:hover {
            color: #682773;
            cursor: pointer
        }

        .labels {
            font-size: 11px
        }

        .add-experience:hover {
            background: #BA68C8;
            color: #fff;
            cursor: pointer;
            border: solid 1px #BA68C8
        }
    </style>

</x-backend.layouts.master>
