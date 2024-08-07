<x-frontend.layouts.master>
    <!DOCTYPE html>
    <html>

    <body id="body-pd">
        <h1>{{ $customer->id}}</h1>

        <div class="container py-2">
            <h2 class="card-title">{{ $property->property_title }}</h2>


            <i class="fa-solid fa-location-dot my-3"></i><span class="fs-5"> {{ $property->location }}</span>
        </div>
        {{-- Image Area for Property --}}
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 px-0 mb-3 mb-md-0">
                    <div class="image-wrapper border-radius-left">
                        <img src="{{ asset('storage/properties/' . $property->property_image) }}" alt="Image 1" style="width: 100%; object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 px-0 mb-3 mb-md-0">
                    <div class="row">
                        <div class="col-12 px-0 mb-3">
                            <div class="image-wrapper me-4 bg-secondary">

                                {{-- middle-top --}}
                                {{-- <img src="https://cutt.ly/34YLKd8" alt="Image 2"> --}}
                            </div>
                        </div>
                        <div class="col-12 px-0">
                            <div class="image-wrapper me-4 bg-secondary">
                                {{-- middle bottom --}}
                                {{-- <img src="https://cutt.ly/34YLKd8" alt="Image 3"> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 px-0 mt-3 mt-md-0">
                    <div class="row">
                        <div class="col-12 px-0 mb-3">
                            <div class="image-wrapper border-radius-top-right bg-secondary">
                                {{-- top right --}}
                                {{-- <img src="{{ asset('storage/properties/' . $property->property_image) }}" alt="Image 4"> --}}
                            </div>
                        </div>
                        <div class="col-12 px-0">
                            {{-- bottom right --}}
                            <div class="image-wrapper border-radius-bottom-right bg-secondary">
                                {{-- <img src="https://cutt.ly/34YLKd8" alt="Image 5"> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br>
        {{-- Details  --}}
        <div class="container py-4">
            <div class="row">
                <div class="col-md-8 col-sm-12">
                    <div class="row">
                        <div class="col-md-6">
                            <strong><span class="fs-6">Property ID: </strong>{{ $property->property_id }}</span>
                        </div>
                        <div class="col-md-6">
                            <div class="float-end">
                                <i class='fa-regular fa-heart me-3 fs-4' id="favoriteIcon"
                                    onclick="favorite('favoriteIcon')"></i>
                                <i class="fa-sharp fa-solid fa-share me-4 fs-4"></i>
                            </div>

                        </div>
                    </div>

                    <div>
                        <hr>
                        <h4 class="mb-5"><strong class="fs-2" style="font-weight: 900">&#2547;</strong>
                            {{ $property->price }} Lakh</h4>
                    </div>

                    {{-- Amenities --}}
                    <div class="mt-5">
                        <div class="row" style="max-width: 50vw;">
                            <div class="col-md-3 col-sm-12 amenities bordered custom-shadow ">
                                <div style="padding: 24px" class="">
                                    <div>
                                        <i class='bx bxs-bed fs-2'><span class="fs-4"> 4</span></i>
                                    </div>
                                    <div class="my-2 fs-5">Bedroom</div>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-12 amenities bordered custom-shadow mx-3">
                                <div style="padding: 24px" class="">
                                    <div>
                                        <i class='bx bxs-bath fs-2'><span class="fs-4"> 2</span></i>
                                    </div>
                                    <div class="my-2 fs-5">Bathroom</div>
                                </div>
                            </div>

                            <div class="col-md-5 col-sm-12 amenities bordered custom-shadow">
                                <div style="padding: 24px" class="">
                                    <div>
                                        <i class='bx bxs-area fs-2'><span class="fs-4"> 400 sqft</span></i>
                                    </div>
                                    <div class="my-2 fs-5">Size</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Exact Location  --}}
                    <div class="mt-5">
                        <h3>Exact Location</h3>
                        <hr>
                        <p class="fs-5 my-4"><strong> Address :</strong> House-8, R-2/D, Pallabi, Mirpur-12</p>
                    </div>
                    {{-- Description  --}}
                    <div class="my-5">
                        <h3>Description</h3>
                        <hr>
                        <p class="">{{ $property->property_description }}</p>
                    </div>
                    <div class="my-3">
                        <a href="#" class="text-dark"><strong>Read More...</strong> </a>
                    </div>
                </div>
                {{-- Request Form  --}}
                <div class="col-md-4 col-sm-12 mt-3">
                    <div class="mx- rounded bg-light">
                        <div class="card col-md-12 ">

                            <div class="card-body">
                                {{-- <h5 class="card-title text-center">Managed by<br><b>Rent !t</b></h5> --}}
                                {{-- <img src="https://i.ibb.co/VLx8vJk/download.png" alt="download" class="img-thumbnail "> --}}
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6 border p-2 rounded-start bg-light">
                                            <h5>Available From</h5>
                                            12/3/2023
                                        </div>
                                        <div class="col-md-6 border p-2 rounded-end bg-light">
                                            <h5>Rental For</h5>
                                            <p>Category</p>
                                        </div>
                                    </div>
                                </div>
                                <hr>

                                <div class="border bg-light p-3">
                                    <h4 class="text-center">Home Owner</h4>
                                    <div class="">
                                        <p class="fs-5  m-0">Name</p>
                                        <p class="fs-5 m-0">owner@mail.com</p>
                                    </div>
                                </div>
                                <hr>
                                {{-- Form --}}
                                <form action="{{ route('reservations.store', ['property_id' => $property->id, 'customer_id' => $customer->id]) }}"
                                    method="post" class="form-group align-right" enctype="multipart/form-data">
                                    @csrf
                                    <label class="form-label">Name:
                                    </label> <input class="form-control" placeholder="Enter Name"
                                        value="{{ old('name') }}" type="text" name="name">
                                    <br>
                                    <label class="form-label">Email: </label>
                                    <input class="form-control" type="email" placeholder="example@email.com"
                                        value="{{ old('email') }}" name="email">
                                    <br>
                                    @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror

                                    <label for="message">Message:</label>
                                    <textarea class="form-control" type="text" rows="4" name="message">I am interested in property [{{ $property->property_title }}] </textarea>
                                    <br>

                                    <label class="form-label">Phone: </label>
                                    <input class="form-control" type="text" value="{{ old('number') }}"
                                        placeholder="+880" name="number">
                                        <br>
                                    @error('number')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    
                                    <button class="btn btn-success" type="submit">Apply</button>
                                </form>
                                @if (session('message'))
                                    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                                    <script>
                                        $(document).ready(function() {
                                            $('#exampleModal').modal('show');
                                        });
                                    </script>
                                @endif
                                <!-- Button trigger modal -->
                                {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        Launch demo modal
                                    </button> --}}
                                <!-- Modal -->

                                <div class="modal fade" id="exampleModal" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5 text-success" id="exampleModalLabel">
                                                    {{ session('message') }}
                                                </h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h4>Waiting for Approval...</h4>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn"
                                                    style="background-color: #cdd1d7"
                                                    data-bs-dismiss="modal"><strong>Close</strong></button>
                                                <a type="button" href="{{ route('frontend.properties') }}"
                                                    class="btn" style="background-color: #e1f0f9"><strong>More
                                                        Properties</strong></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        </div>
    </body>

    </html>
</x-frontend.layouts.master>
