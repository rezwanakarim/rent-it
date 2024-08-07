<x-backend.layouts.master>

    <div class="height-100 bg-light p-2">
        <div class="height-100 bg-light">
            <h4>
                <x-slot:title>
                    Phone Number Show
                    </x-slot>
            </h4>

            <h2 class="alert alert-info text-center">Phone Details | <span><a href="{{route('phones.list')}}">List</a></span></h2>
            <div class=" row justify-content-center">
                <div class="bg-light p-3 my-3 col-8 shadow-lg rounded">
                    <h5 class="d-inline-block bg-light">Phone Number:</h5><br>
                    <h4 class="alert alert-secondary ">{{ $phone->number}}</h4>

                </div>
            </div>
        </div>

    </div>


</x-backend.layouts.master>
