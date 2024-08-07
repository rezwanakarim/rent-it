<x-frontend.layouts.partials.topbar />
<x-frontend.layouts.master>
    <!DOCTYPE html>
    <html lang="en">

    <body>

        <div id="wrapper">
            <!---carousal--->
            <div class="container">
                <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        @php
                            $count = 0;
                            $active = 'active';
                        @endphp
                        @foreach ($sliders as $slider)
                            <button type="button" data-bs-target="#carouselExampleDark"
                                data-bs-slide-to="{{ $count }}" class="{{ $active }} bg-light"
                                aria-current="true" aria-label="Slide 1">
                            </button>
                            @php
                                $count++;
                                $active = '';
                            @endphp
                        @endforeach
                    </div>
                    <div class="carousel-inner">
                        @php
                            $active = 'active';
                        @endphp
                        @foreach ($sliders as $slider)
                            <div class="carousel-item {{ $active }}" data-bs-interval="5000">
                                <img src="{{ asset('storage/sliders/' . $slider->image) }}" class="d-block w-100 h-75"
                                    style="object-fit: cover;" alt="...">
                                <div class="carousel-caption d-none d-md-block slider-text rounded">
                                    <h5 class="fs-2 text-white">{{ $slider->title }}</h5>
                                    <p class="fs-5 text-white">{{ $slider->description }}</p>
                                </div>
                            </div>
                            @php
                                $active = '';
                            @endphp
                        @endforeach
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>


            <!-- Main Contents  -->



            <!-- call to action -->
            <section class="container shadow py-2 my-4 rounded">
                <!-- title -->
                <div class="text-center" style="color:whitesmoke">
                    <h2 class="my-3 text-dark">Find your ideal property</h2>
                    <p class="mb-4 text-dark">Use the search form below to find properties that match your criteria.</p>
                </div>
                {{-- form  --}}
                <div class="container rounded p-5">
                    <form action="{{ route('frontend.property') }}" class="" method="GET">
                        @csrf
                        <div class="p-3 row">
                            <div class="offset-md-1 col-md-4 ">
                                <label for="inputArea" class="form-label text-light">Area</label>
                                <select id="inputArea" class="form-select shadow" name="area">
                                    <option selected>Choose...</option>
                                    <option value="1">Uttara</option>
                                    <option value="2">Azompur</option>
                                    <option value="3">Abdullapur</option>
                                </select>
                            </div>
                            <div class="col-md-4 ">
                                <label for="inputType" class="form-label text-light">Type</label>
                                <select class="form-select shadow" name="category" id="property_category">
                                    <option selected disabled value="0">Choose Category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ old('property_category', $category->id) }}">
                                            {{ $category->title }}</option>
                                    @endforeach
                                </select><br>
                            </div>
                            <div class="mt-4 col-md-3 ">
                                <button type="submit" class="btn dark-button btn-dark mt-2 shadow">Search</button>
                            </div>
                        </div>
                    </form>
                </div>
            </section>

            <!-- Featured Properties  -->
            <section class="bg-light py-4">
                <div class="container mt-5">
                    <h2 class="heading text-center my-3 text-uppercase">Popular Properties</h2>
                    <div class="row">

                        @php
                            $limit = 1;
                        @endphp

                        @foreach ($properties as $property)
                            {{-- @dd($property); --}}
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="card my-3 rounded-3 hoverable">



                                    <div class="iconHolder">
                                        <div class="imgHold"><img
                                                src="{{ asset('storage/properties/' . $property->property_image) }}"
                                                alt="property image" class="card-img-top"
                                                style="width: 100%; height: 35vh; object-fit: cover;"></div>

                                        <div class="favorite"> 
                                            <i id="favoriteIcon{{ $loop->iteration }}"
                                                onclick="favorite('favoriteIcon{{ $loop->iteration }}')"
                                                class="fa-regular fa-heart fs-4"></i>
                                        </div>
                                    </div>

                                    <div class="card-details my-4">
                                        <div class="px-4 my-2">
                                            <a href="#"
                                                class="text-decoration-none card-title fs-5 text-dark ">{{ $property->property_title }}</a>
                                        </div>
                                        <div class="px-4 my-2">
                                            <a href="#" class="card-text text-dark text-decoration-none">
                                                <i class="fa-solid fa-location-dot"></i>
                                                {{ $property->location }}
                                            </a>
                                        </div>
                                        {{-- Detail button  --}}
                                        <div class="py-2">
                                            <a href="{{ route('frontend.details', ['property' => $property->id]) }}"
                                                class="mx-3 btn btn-dark">Details</a>
                                        </div>
                                    </div>
                                    <div class="card-footer">

                                        <span class="text-muted mx-3"><i class="fa-solid fa-bed"></i> 2 Bedroom</span>

                                        <span class="float-end text-muted mx-2"> <i class="fa-solid fa-shower"></i>
                                            1 Bathroom</span>
                                    </div>
                                </div>
                            </div>
                            @php
                                $limit++;
                                if ($limit > 6) {
                                    break;
                                }
                                
                            @endphp
                        @endforeach
                    </div>
                    <div class="my-4 text-center">

                        <a href="{{ route('frontend.properties') }}" type="submit" class="btn btn-lg btn-dark">View
                            More</a>
                    </div>
                </div>
            </section>

            <!--POPULAR Categories  -->
            <section class="py-4">
                <h3 class="text-center my-4">POPULAR CATEGORIES</h3>
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-6 my-3">
                            <div class="card text-center hoverable">
                                <h4 class="mt-3 card-heading card-title">Flat</h4>
                                <a href="#"><img class="card-img-bottom"
                                        src="{{ asset('ui/frontend/images/category/img.png') }}" alt=""></a>
                            </div>
                        </div>
                        <div class="col-md-3 col-6 my-3">
                            <div class="card text-center hoverable p-2">
                                <h4 class="mt-3 card-heading card-title">Apartment</h4>
                                <a href="#"><img class="card-img-bottom img-fluid"
                                        src="{{ asset('ui/frontend/images/category/img.png') }}" alt="Apartment"
                                        width="" height=""></a>
                            </div>
                        </div>
                        <div class="col-md-3 col-6 my-3">
                            <div class="card text-center hoverable">
                                <h4 class="mt-3 card-heading card-title">Office</h4>
                                <a href="#"><img class="card-img-bottom"
                                        src="{{ asset('ui/frontend/images/category/img.png') }}" alt=""></a>
                            </div>
                        </div>
                        <div class="col-md-3 col-6 my-3">
                            <div class="card text-center hoverable">
                                <h4 class="mt-3 card-heading card-title">Shop/Restaurant</h4>
                                <a href="#"><img class="card-img-bottom"
                                        src="{{ asset('ui/frontend/images/category/img.png') }}" alt=""></a>
                            </div>
                        </div>
                    </div>
            </section>


            <!-- FAQ -->
            <section style="background-color: #f3f3f5;" class="p-4 faq-area">
                <div class="container bg-light px-4 py-5 rounded">
                    <h3 class="text-center">FAQs</h3>
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    How do I apply for a rental property?
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">To apply for a rental property, please fill out the online
                                    application form on our website.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    What is the security deposit for a rental property?
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">The security deposit is typically one month's rent, but may
                                    vary depending on the property and other factors.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThree" aria-expanded="false"
                                    aria-controls="flush-collapseThree">
                                    Are pets allowed in rental properties?
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Some rental properties may allow pets, while others do not.
                                    Please check the property listing or contact us for more information.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

    </body>

    </html>
</x-frontend.layouts.master>
