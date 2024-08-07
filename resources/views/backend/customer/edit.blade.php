<x-backend.layouts.master>
    <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="card bg-light mx-auto" style="width: 60rem;">
            <div class="card-body border rounded bg-light">
                <div class="alert alert-secondary" role="alert">
                    <h2 class="text-center">Update Customer Info</h2>
                </div>
                <div class="container rounded bg-white">
                    <div class="row">
                        <div class="col-md-4 border-right">
                            <div class="d-flex flex-column align-items-center text-center p-3">
                                <img class="rounded-circle mt-5" width="150px" src="https://cutt.ly/N4M2Cu0">
                                <span class="font-weight-bold">{{ $customer->username }}</span>
                                <span class="text-black-50">{{ $customer->email }}</span>
                            </div>
                        </div>
                        <div class="col-md-8 border-right">
                            <div class="p-3">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <h4 class="text-right">Profile Settings</h4>
                                </div>

                                {{-- Cutomer Update Form  --}}
                                <form method="POST" action="{{ route('customers.update', ['customer' => $customer->id]) }}"enctype="multipart/form-data">
                                    @method('patch')
                                    @csrf
                                    <div class="row mt-2">
                                        <div class="col-md-12">
                                            <label class="fs-6 text-secondary" for="firstName">First name</label>
                                            <input class="form-control shadow"
                                                value="{{ old('firstName', $customer->firstName) }}" type="text"
                                                name="firstName" id="firstName" placeholder="Enter first name"> <br>
                                            @error('firstName')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-md-12">
                                            <label class="fs-6 text-secondary" for="lastName">Surname</label>
                                            <input class="form-control shadow"
                                                value="{{ old('lastName', $customer->lastName) }}" type="text"
                                                name="lastName" id="lastName" placeholder="Enter last name"> <br>
                                            @error('lastName')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="">
                                        <label for="gender" class="form-label">Gender:</label><br>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" class="form-check-input shadow"
                                                {{ $customer->gender == 'male' ? 'checked' : '' }} name="gender"
                                                id="male" value="male">
                                            <label for="male" class="form-check-label">Male</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" class="form-check-input shadow"
                                                {{ $customer->gender == 'female' ? 'checked' : '' }} name="gender"
                                                id="female" value="female">
                                            <label for="female" class="form-check-label">Female</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" class="form-check-input shadow"
                                                {{ $customer->gender == 'others' ? 'checked' : '' }} name="gender"
                                                id="others" value="others">
                                            <label for="others" class="form-check-label">Others</label>
                                        </div>
                                    </div>
                                    @error('gender')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror


                                    <div class="row mt-2">
                                        <div class="col-md-12">
                                            <label class="fs-6 text-secondary" for="number">Phone number</label>
                                            <input class="form-control shadow"
                                                value="{{ old('number', $customer->number) }}" type="text"
                                                name="number" id="number" placeholder="Enter phone number"> <br>
                                            @error('number')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mt-2">
                                        <div class="col-md-12">
                                            <label class="fs-6 text-secondary" for="address">Address</label>
                                            <input class="form-control shadow"
                                                value="{{ old('address', $customer->address) }}" type="text"
                                                name="address" id="address" placeholder="Enter first name"> <br>
                                            @error('address')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="pt-3 ">
                                        <button type="submit" class="btn btn-dark btn-lg px-4 ">Update</button>
                                        <a href="{{ route('customers.list')}}" class="btn btn-secondary btn-lg px-4 ">Cancel</a>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                    
                </div>
            </div>
        </div>
    </div>

</x-backend.layouts.master>
