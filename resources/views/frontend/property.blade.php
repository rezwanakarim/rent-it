<x-frontend.layouts.master>
    <!DOCTYPE html>
    <html lang="en">

    <body>

        <!-- Main Contents  -->

        <!-- Featured Properties  -->
        <section class="bg-light py-4">
            <div class="container mt-5">
                <h2 class="heading my-3 text-uppercase">Property</h2>
                <form action="" method="GET">
                    @csrf
                    <div>
                        <input type="search" name="property" placeholder="Enter area name" style="height: 3rem; "
                            class="fs-5 w-50 form-control d-inline">
                        <button type="submit" class="btn btn-lg btn-dark ms-3">Search</button>
                    </div>
                </form>
                <div class="row">
                    @foreach ($properties as $property)
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card my-3 rounded-3 hoverable">



                                <div class="iconHolder">
                                    <div class="imgHold"><img
                                            src="{{ asset('storage/properties/' . $property->property_image) }}"
                                            alt="property image" class="card-img-top" style="width: 100%; height: 35vh; object-fit: cover;"></div>

                                    {{-- <div class="favorite"> 
                                        <i id="favoriteIcon{{ $loop->iteration }}"
                                            onclick="changeIcon('favoriteIcon{{ $loop->iteration }}')"
                                            class="fa-regular fa-heart"></i>
                                    </div> --}}
                                    <div class="favorite"> 
                                        <i id="favoriteIcon{{ $loop->iteration }}"
                                            onclick="favorite('favoriteIcon{{ $loop->iteration }}')"
                                            class="fa-regular fa-heart"></i>
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
                    @endforeach
                </div>
                {{ $properties->links() }}
            </div>
        </section>

        <!--POPULAR Categories  -->



    </body>

    </html>
</x-frontend.layouts.master>
